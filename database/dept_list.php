 <?php
    require 'database.php';
    $sql="select dept_id,dept_name from department";
    $result = $conn->query($sql);
    $data = $result->fetch_all(MYSQLI_ASSOC);
    echo json_encode($data);
 ?>