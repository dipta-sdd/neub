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

$sql="select * from student where std_id='";
$sql.=$id;
$sql.="'";
$result = $conn->query($sql);
if($result->num_rows>0){
  $row=$result->fetch_assoc();
  if($pass==$row['pass']){
    
    $data=array(
        "status"=>true,
        "username"=> $id,
        "type" => 'student',
        "dept_id" => $row['dept_id']
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



if($data['status'] === false){
  $sql="SELECT * FROM `teacher` WHERE `username`='".$id."'";
  $result = $conn->query($sql);
  if($result->num_rows>0){
    $row=$result->fetch_assoc();
    if($pass==$row['pass']){
      
      $data=array(
          "status"=>true,
          "username"=> $id,
          "type" => 'teacher',
          "dept_id" => $row['dept_id']
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
}

if($data['status']=== true){
  setcookie("user",$id,time()+(86400*300));
  setcookie("user_type",$data['type'],time()+(86400*300));
  setcookie("dept_id",$data['dept_id'],time()+(86400*300));

}

// echo $sql;
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
echo json_encode($data);
?>