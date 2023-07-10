<?php
$sql="select * from student where std_id='";
$sql.=$std_id;
$sql.="'";
$result = $conn->query($sql);
$student = $result->fetch_assoc();
?>