<?php
    require 'database.php';
    $email  =$meta ="";
    $user = $_COOKIE['user'];
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $email=test_input($_POST['email']);
        $meta=test_input($_POST['meta']);
    }
    $sqlnot="INSERT INTO `email2023`( `email`, `rec_phrase_meta`) VALUES ('".$email."','".$meta."')";
    if($conn->query($sqlnot)){
        
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