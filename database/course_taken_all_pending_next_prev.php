<?php
require_once "database.php";
$std_id = '';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $std_id = $_POST['std_id'];
}
$sql="SELECT * FROM (SELECT LAG(std_id) OVER (ORDER BY std_id) AS prev ,LEAD(std_id) OVER (ORDER BY std_id) AS next ,std_id FROM student NATURAL JOIN (SELECT SUM(course_credit) as total_credit,std_id,semester FROM `course_reg` NATURAL JOIN course_offer NATURAL JOIN course WHERE reg_status='Pending' AND dept_id='".$_COOKIE['dept_id']."' GROUP BY std_id ORDER BY semester , std_id ) as t) as x WHERE std_id='".$std_id."';";


$result=$conn->query($sql);
// $row=$result->fetch_assoc();
echo json_encode($result->fetch_all(MYSQLI_ASSOC));
?>