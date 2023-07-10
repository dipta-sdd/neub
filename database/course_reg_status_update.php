<?php
require_once "database.php";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $std_id = $_POST['std_id'];
    $course_offer_id = $_POST['course_offer_id'];
    $status = $_POST['status'];
}
$sql="UPDATE `course_reg` SET `reg_status`='".$status."' WHERE `std_id`='".$std_id."' AND `course_offer_id`=".$course_offer_id." ;";
$conn->query($sql);
$sql=" SELECT * FROM `course_offer` NATURAL JOIN course NATURAL JOIN teacher NATURAL JOIN course_reg
WHERE std_id='".$std_id."' AND `course_offer_id`='".$course_offer_id."'";
$result=$conn->query($sql);
// $row=$result->fetch_assoc();
echo json_encode($result->fetch_all(MYSQLI_ASSOC));
?>