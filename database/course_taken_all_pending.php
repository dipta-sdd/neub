<?php
require_once "database.php";
$semester = '';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $semester = $_POST['semester'];
}
$sql="SELECT std_name, total_credit,std_id,semester FROM student NATURAL JOIN (SELECT SUM(course_credit) as total_credit,std_id,semester FROM `course_reg` NATURAL JOIN course_offer NATURAL JOIN course WHERE reg_status='Pending' AND dept_id='".$_COOKIE['dept_id']."' GROUP BY std_id ORDER BY semester , std_id ) as t;";
$result=$conn->query($sql);
// $row=$result->fetch_assoc();
echo json_encode($result->fetch_all(MYSQLI_ASSOC));
?>