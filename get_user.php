<?php 
  $data['status']=false;

if(!isset($_COOKIE["user"])) {
    $data['status']=false;
} else {
    $data['status']=true;
     $data['user']=$_COOKIE['user'];
}
echo json_encode($data);
?>