<?php
require_once "database.php";
$id='';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
  }
$sql="SELECT `tch_id`,`tch_name` FROM `teacher` WHERE dept_id='".$_COOKIE['dept_id']."' and `tch_name` like '". $_POST['id']."%' limit 10";
// echo $sql;
$result = $conn->query($sql);
$data=array();

while(($row = $result->fetch_array(MYSQLI_NUM))){
  $data[]= $row[1].'-'.$row[0];
}
echo json_encode($data);
?>