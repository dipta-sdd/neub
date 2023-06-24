<?php
    require 'database.php';
    $stmt = $conn->prepare("INSERT INTO `student`(`std_id`, `pass`, `std_name`, `std_mobile`, `std_email`, `std_address`, `dept_id`, `session_id`) values (?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssssssii",$id,$pass,$name,$mobile,$email,$address,$dept,$session);
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $name=test_input($_POST['name']);
        $id=test_input($_POST['id']);
        $pass=test_input($_POST['pass']);
        $dept= test_input($_POST['dept']);
        $session= test_input( $_POST['session'] );
        $mobile= test_input( $_POST['mobile'] );
        $email= test_input( $_POST['email']);
        $address= test_input( $_POST['address'] );
        // $stmt->execute();
        // $data=array(
        //     "status"=>true,
        // );
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