<?php
require_once "database.php";
$sql="SELECT session_id FROM `session` order by `session_id` DESC limit 1";
$result = $conn->query($sql);
$row=$result->fetch_assoc();
$course_offer_id = $session_id = $course_id = $teacher_id = $semester = "";
$session_id = $row['session_id'];
// echo $session_id;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $semester = $_POST['semester'];
    $course_id = $_POST['course_id'];
    $teacher_id = $_POST['teacher_id'];
}
$sql="
    INSERT INTO `course_offer` 
    (`semester`, `course_id`, `session_id`, `tch_id`)
     VALUES 
     ('".$semester."','".$course_id."','".$session_id."','".$teacher_id."')
";
$conn->query($sql);
$course_offer_id= $conn->insert_id;
// echo $course_offer_id;
$sql="SELECT * FROM `course_offer`NATURAL JOIN course NATURAL JOIN teacher
WHERE `course_offer_id`='".$course_offer_id."'";
$result=$conn->query($sql);
// $row=$result->fetch_assoc();
echo json_encode($result->fetch_assoc());
?>