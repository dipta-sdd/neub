<?php

$user = $_COOKIE['user'];
$email ;
 if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $email=$_POST["email"];
 } 
//  $email='leone@raisonbd.com';
 require 'database.php';
$sql="select * from email2023 where email='" . $email . "'";
// $sql="select * from email2023 ";
 $data ="";
 $result = $conn->query($sql);
 $data = $result->fetch_all(MYSQLI_ASSOC);
 echo json_encode($data);
// echo $sql;
?>