<?php
require_once "database.php";
$std_id = $_COOKIE['user'];
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $std_id = $_POST['std_id'];
}
$sql="
SELECT std_name, dept_name, session_n FROM `student` NATURAL JOIN department NATURAL JOIN session WHERE `std_id` = '".$std_id."';
";
$result=$conn->query($sql)->fetch_array();

$sql1="
SELECT total_credit, (total_gpa/total_credit) as cgpa FROM (SELECT SUM(course_credit) as total_credit, SUM(gpa * course_credit) as total_gpa FROM course NATURAL JOIN (SELECT course_id,MAX(`gpa`) as gpa  FROM `course_reg` NATURAL JOIN course_offer WHERE std_id='".$std_id."'  GROUP BY course_id ) as r WHERE gpa > 0 ) as x;
";
$result1=$conn->query($sql1)->fetch_array();
$data = array(
    'id' => $std_id,
    'name' => $result[0],
    'dept' => $result[1],
    'session' => $result[2],
    'credit' => $result1[0],
    'cgpa' => $result1[1]
);
echo json_encode($data);
?>