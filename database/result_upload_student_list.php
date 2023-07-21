<?php
require_once 'database.php';
$tch_id = $_COOKIE['tch_id'];
$course_offer_id ='';
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $course_offer_id = $_POST['course_offer_id'];
}
$sql="SELECT std_id, std_name, gpa 
    FROM `course_reg` NATURAL JOIN student 
    WHERE course_offer_id= '".$course_offer_id."' AND reg_status = 'Approved';";
$result = $conn->query($sql)->fetch_all(MYSQLI_ASSOC);
echo json_encode($result);
?>