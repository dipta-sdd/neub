 <?php
    require 'database.php';
    $sql="SELECT * FROM `notice` ORDER BY `date` DESC;";
    $result = $conn->query($sql);
    $data = $result->fetch_all(MYSQLI_ASSOC);
    echo json_encode($data);
 ?>