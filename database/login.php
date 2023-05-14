<?php
    $redirect = '<script>  location.replace("./index.html") </script> ';
    $data['status']=false;





$id = $pass = "";
$redirect = '<script>  location.replace("./index.php") </script> ';
require 'database.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = test_input($_POST["name"]);
  $pass = test_input($_POST["pass"]);
}

$sql="select pass from student where std_id='";
$sql.=$id;
$sql.="';";
$result = $conn->query($sql);
if($result->num_rows>0){
  $row=$result->fetch_assoc();
  if($pass==$row['pass']){
    setcookie("user",$id,time()+(86400*300));
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