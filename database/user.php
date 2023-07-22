<?php 
  $user['status']=false;

if(!isset($_COOKIE["user"])) {
    $user['status']=false;
} else {
    $user['status']=true;
     $user['user']=$_COOKIE['user'];
     $user['type']=$_COOKIE['user_type'];
     $user['dept_id']=$_COOKIE['dept_id'];
    //  $user['tch_id']=$_COOKIE['tch_id'];

}
?>