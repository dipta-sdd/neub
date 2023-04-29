<?php
require_once 'database.php';
$username = $password = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);
  }
$sql="select password from user where username='";
$sql.=$username;
$sql.="';";
$result = $conn->query($sql);
if($result->num_rows>0){
  $row=$result->fetch_assoc();
  if($password==$row['password']){
    setcookie("user",$username,time()+(86400*300));
    $data=array(
        "status"=>true,
    );
  } else{
    $data= array(
      "status"=> false,
      'error' => 'Incorect ID or password'
  );
  }
} else{
  $data= array(
    "status"=> false,
    'error' => 'Incorect ID or password'
);
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
echo json_encode($data);


?>