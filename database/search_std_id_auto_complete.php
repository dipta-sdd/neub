<?php
require_once "database.php";
$id='';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = test_input($_POST["id"]);
  }
$sql="select std_id from student where std_id like '". $_POST['id']."%'";
$result = $conn->query($sql);
// $data = $result->fetch_all(MYSQLI_ASSOC);
$data = $result->fetch_all(MYSQLI_NUM);
// $data = $result->fetch_all();
echo json_encode($data);
?>