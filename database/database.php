<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "neub";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    // echo "Connected successfully";
    $sql="SELECT * FROM `session` ORDER BY `session_id` DESC LIMIT 1;";
    $result = $conn->query($sql);
    $row=$result->fetch_assoc();
    $current_session= $row['session_id'];
    
    // function get_student($std_id){
    //     $sql="select * from student where std_id='";
    //     $sql.=$std_id;
    //     $sql.="'";
    //     $result = $conn->query($sql);
    //     $result->fetch_assoc();
    // }

?>