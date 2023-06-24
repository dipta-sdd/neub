<?php
require_once "database.php";
$sql="SELECT * FROM `session` order by `session_id` DESC";
$result = $conn->query($sql);
$data = $result->fetch_all(MYSQLI_ASSOC);
echo json_encode($data);

?>