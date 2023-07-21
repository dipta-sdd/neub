<?php 
  $data['status']=false;

if(!isset($_COOKIE["user"])) {
    $data['status']=false;
} else {
    $data['status']=true;
     $data['user']=$_COOKIE['user'];
     $data['type']=$_COOKIE['user_type'];
     $data['dept_id']=$_COOKIE['dept_id'];
    //  $data['tch_id']=$_COOKIE['tch_id'];

}
echo json_encode($data);
?>