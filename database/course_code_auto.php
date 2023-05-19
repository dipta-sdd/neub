<?php
require_once "database.php";
$id='';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
  }
$sql="SELECT `course_id`,`course_tittle` FROM `course` WHERE dept_id='".$_COOKIE['dept_id']."' and `course_id` like '". $_POST['id']."%' limit 10";
$result = $conn->query($sql);
$data=array();

while(($row = $result->fetch_array(MYSQLI_NUM))){
  $data[]= $row[0].' > '.$row[1];
}

echo json_encode($data);
?>