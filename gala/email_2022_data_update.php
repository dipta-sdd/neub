<?php
    require 'database.php';
    $email  =$pc=$user = $eth= $discord =$discord_conn= $task_1= $task_2= $task_3= $gala =$other="";
    $user = $_COOKIE['user'];
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $email=test_input($_POST['email']);
        $eth=test_input($_POST['eth']);
        $discord=test_input($_POST['discord']);
        $discord_conn=test_input($_POST['discord_conn']);
        $task_1=test_input($_POST['task1']);
        $task_2=test_input($_POST['task2']);
        $task_3=test_input($_POST['task3']);
        $gala=test_input($_POST['gala_coin']);
        $other=test_input($_POST['nft']);
        $pc=test_input($_POST['pc']);
    }
    $sqlnot="INSERT INTO `noti`(`email`, `pc`, `player`) VALUES ('".$email."','".$pc."','".$user."')";
    if($conn->query($sqlnot)){
        $hh='';
    }
    if($discord_conn==='true'){
        $sql="UPDATE `email2024` SET `discord`='".$discord."',`dis_pl`='".$user."',`up_time`=CURRENT_TIMESTAMP ,`task1`='".$task_1."',`pc`='".$pc."',`task2`='".$task_2."',`task3`='".$task_3."',`eth`='".$eth."',`other`='".$other."',`player`='".$user."' ,`gala`='".$gala."' WHERE `email`='".$email."'";
    }
    else{
        $sql="UPDATE `email2024` SET `discord`='".$discord."',`up_time`=CURRENT_TIMESTAMP ,`task1`='".$task_1."',`pc`='".$pc."',`task2`='".$task_2."',`task3`='".$task_3."',`eth`='".$eth."',`other`='".$other."',`player`='".$user."' ,`gala`='".$gala."' WHERE `email`='".$email."'";
    }
    
    if($conn->query($sql) === TRUE){
        $data ='<p class="text-primary">Successfuly Updated.</p>';
    } else{
        $data ='<p class="text-danger">Something went wrong.</p>';
    }
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    // echo json_encode($data);
    echo $data ;

?>