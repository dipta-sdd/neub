<?php
    require 'database.php';
    $sql="(select * from email2024 where refered_id is not null and discord='true' and player is not null and task2= 'true');";
    // $sql="
    //   (select * from email3 where (refered_id='ovi' or refered_id='ddasdrive') and player is null) union
    //   (select * from email3 where (refered_id='ovi' or refered_id='ddasdrive') and player is not null and (task2='false' or task2 is null)) union
    //   (select * from email3 where (refered_id='ovi' or refered_id='ddasdrive') and player is not null and task2='true' ) 
    //  ";
    $result = $conn->query($sql);
    $data = $result->fetch_all(MYSQLI_ASSOC);

    echo json_encode($data);
 ?>