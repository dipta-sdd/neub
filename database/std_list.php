 <?php
    require 'database.php';
    $std_id='';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $std_id = $_POST["id"];
    }
    $sql="SELECT * FROM `student` NATURAL JOIN department NATURAL JOIN session where std_id like'".$std_id."%' order by std_id desc;";
    $result = $conn->query($sql);
    $data = $result->fetch_all(MYSQLI_ASSOC);
   //  echo $sql;
    echo json_encode($data);
 ?>