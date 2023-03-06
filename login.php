<?php
    $redirect = '<script>  location.replace("./index.html") </script> ';
    $data['status']=false;





$name = $pass = "";
$redirect = '<script>  location.replace("./index.php") </script> ';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $pass = test_input($_POST["pass"]);
  if($name == "root" ){
    setcookie("user","root",time()+(86400*300));
    $data=array(
        "status"=>true,
    );
  } else{
    $data= array(
        "status"=> false,
        'error' => 'Incorect ID or password'
    );
  }
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
echo json_encode($data);
?>