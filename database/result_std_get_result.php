<?php
require_once "database.php";
$std_id = $_COOKIE['user'];
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $std_id = $_POST['std_id'];
}
$sql="
SELECT * FROM `course_reg` NATURAL JOIN course_offer NATURAL JOIN session NATURAL JOIN course WHERE std_id='".$std_id."' AND reg_status= 'Approved' ORDER BY session_id, course_id;
";
$result=$conn->query($sql);
echo json_encode($result->fetch_all(MYSQLI_ASSOC));
?>