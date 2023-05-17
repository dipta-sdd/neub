 <?php
    require 'database.php';
    $sql="SELECT * FROM `session` ORDER BY `session_id` DESC LIMIT 1;";
    $result = $conn->query($sql);
    $row=$result->fetch_assoc();
    echo json_encode($row);
   //  $data = $result->fetch_all(MYSQLI_ASSOC);
   //  echo json_encode($data);
 ?>