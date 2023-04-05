 <?php
    require 'database.php';
    $sql="select dept_id,dept_name from dept";
    $result = $conn->query($sql);
    $data ="";
    while($row = $result->fetch_assoc()) {

      $data.='<option value="';
      $data.=$row["dept_id"];
      $data.='">';
      $data.= $row["dept_name"];
      $data.="</option>";
    }
    echo $data;
 ?>