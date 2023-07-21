<?php
require_once 'database.php';
$course_offer_id = '';
$results = [];
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $course_offer_id = $_POST['course_offer_id'];
    $results = $_POST['results'];
}
$sql ="UPDATE `course_reg` SET `gpa`='' WHERE `course_offer_id`='' AND `std_id`='';";
foreach ($results as $result) {
    $sql ="UPDATE `course_reg` SET `gpa`='".$result['gpa']."' WHERE `course_offer_id`='".$course_offer_id."' AND `std_id`='".$result['std_id']."';";
    $conn->query($sql);
}
echo json_encode($results);
?>