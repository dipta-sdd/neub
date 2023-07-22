<?php
require_once "database.php";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST['id'];
}
$sql=" SELECT * FROM notice WHERE `notice_id` = '".$id."';";
$result=$conn->query($sql)->fetch_array(MYSQLI_ASSOC);
echo json_encode($result);
?>