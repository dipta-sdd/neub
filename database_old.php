<?php
    $servername = "localhost";
    $username = "root";
    $password = "2580";
    $dbname = "project_sms";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    // echo "Connected successfully";
?>