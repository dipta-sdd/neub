<?php
require_once "database.php";
$semester = '';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $semester = $_POST['semester'];
}
$sql="SELECT * FROM `course_offer`NATURAL JOIN course NATURAL JOIN teacher
WHERE dept_id='".$_COOKIE['dept_id']."' and semester='".$semester."' and session_id='".$current_session."'";
$result=$conn->query($sql);
// $row=$result->fetch_assoc();
echo json_encode($result->fetch_all(MYSQLI_ASSOC));
?>