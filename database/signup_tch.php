<?php
    require 'database.php';
    $stmt = $conn->prepare("INSERT INTO `teacher` (`username`, `pass`, `tch_name`, `tch_mobile`, `tch_email`, `tch_address`, `dept_id`) values (?,?,?,?,?,?,?)");
    // echo $stmt;
    $stmt->bind_param("ssssssi",$username,$pass,$name,$mobile,$email,$address,$dept);
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $name=test_input($_POST['name']);
        $username=test_input($_POST['username']);
        $pass=test_input($_POST['pass']);
        $dept= test_input($_POST['dept']);
        $mobile= test_input( $_POST['mobile'] );
        $email= test_input( $_POST['email']);
        $address= test_input( $_POST['address'] );
    }
    // else{
    //     $data=array(
    //         "status"=>false,
    //     );
    // }
    if($stmt->execute()){
        $data=array(
            "status"=>true,
        );
    } else{
        $data=array(
            "status"=>false,
        );
    }
    $stmt->close();
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    echo json_encode($data);

?>