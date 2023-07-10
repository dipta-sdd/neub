<?php
require_once "database.php";
$std_id = $_COOKIE['user'];
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $std_id = $_POST['std_id'];
}
$sql="SELECT * FROM student ,
(SELECT * FROM `course_offer`NATURAL JOIN course NATURAL JOIN teacher NATURAL JOIN course_reg
WHERE dept_id='".$_COOKIE['dept_id']."' and std_id='".$std_id."' AND session_id='".$current_session."') as s
WHERE s.std_id= student.std_id
";
$result=$conn->query($sql);
// $row=$result->fetch_assoc();
echo json_encode($result->fetch_all(MYSQLI_ASSOC));
?>