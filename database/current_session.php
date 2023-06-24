 <?php
    require 'database.php';
    $sql="SELECT * FROM `session` ORDER BY `session_id` DESC LIMIT 1;";
    $result = $conn->query($sql);
    $row=$result->fetch_assoc();
    echo json_encode($row);
 ?>