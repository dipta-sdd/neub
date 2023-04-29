<?php
require_once 'database.php';
$username = $password = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);
  }
$sql="INSERT INTO `user`(`username`, `password`) VALUES ('".$username."','".$username."')";

if($conn->query($sql)){
 $data= 'Signup succesful, you can login now.';
  } else{
  $data='Something went wrong';
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
echo $data;


?>