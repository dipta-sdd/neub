<?php
    require 'database.php';
    $id=$last_id='';
    $user = $_COOKIE['user'];
    $data='';
    $sql="SELECT id FROM `last_not _id` where user='".$user."'";
    // echo $sql;

    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $id= $row['id'];
    // echo $id;
    $sql="SELECT * FROM `noti` WHERE not_id>".$id." order by not_id desc";
    //  $data='dfgdxgd';
    $result = $conn->query($sql);
    $result_copy=$conn->query($sql);
    $row = $result->fetch_assoc();
    $last_id= $row['not_id'];
    // echo $last_id;
    $data = $result_copy->fetch_all(MYSQLI_ASSOC);
    if($last_id>$id){
      $sql="UPDATE `last_not _id` SET `id`='".$last_id."' WHERE `user`='".$user."'";
     $conn->query($sql);
    }
    echo json_encode($data);
 ?>