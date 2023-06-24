<?php
require_once "database.php";
$id='';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
  }
$sql="select std_id,std_name from student where std_id like '". $_POST['id']."%' limit 10";

$result = $conn->query($sql);
$data=array();

while(($row = $result->fetch_array(MYSQLI_NUM))){
  $data[]= $row[0];
}

echo json_encode($data);
?>