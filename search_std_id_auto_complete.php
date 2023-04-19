<?php
require_once "database_old.php";
$sql="select std_id from student where std_id like '". $_POST['id']."%'";
$result= $conn->query($sql);
$data= array();
while($row= $result->fetch_assoc()){
    array_push($data,$row['std_id']);
}
echo json_encode($data);
?>