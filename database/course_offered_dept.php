<?php
require_once "database.php";
$sql="SELECT * FROM `course_offer`NATURAL JOIN course NATURAL JOIN teacher
WHERE dept_id='".$_COOKIE['dept_id']."'";
$result=$conn->query($sql);
// $row=$result->fetch_assoc();
echo json_encode($result->fetch_all(MYSQLI_ASSOC));
?>