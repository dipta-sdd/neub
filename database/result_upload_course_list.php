<?php
require_once 'database.php';
$tch_id = $_COOKIE['tch_id'];
$sql="SELECT 
    `course_offer_id`,`course_id`,`course_tittle` 
    FROM `course_offer` NATURAL JOIN `course` 
    WHERE `session_id`='".$current_session."' AND tch_id='".$tch_id."';";
$result = $conn->query($sql)->fetch_all(MYSQLI_ASSOC);
echo json_encode($result);
?>