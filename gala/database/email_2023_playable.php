<?php
    require 'database.php';
    $sql="(SELECT * FROM `email2023` NATURAL JOIN (SELECT COUNT(email) as c , `refered_id` FROM `email2023` GROUP BY `refered_id`) as t 
  
    where refered_id is not null and player is null ORDER BY c DESC , `dis_pl`DESC, email);";
    // $sql="
    //   (select * from email3 where (refered_id='ovi' or refered_id='ddasdrive') and player is null) union
    //   (select * from email3 where (refered_id='ovi' or refered_id='ddasdrive') and player is not null and (task2='false' or task2 is null)) union
    //   (select * from email3 where (refered_id='ovi' or refered_id='ddasdrive') and player is not null and task2='true' ) 
    //  ";
    $result = $conn->query($sql);
    $data = $result->fetch_all(MYSQLI_ASSOC);

    echo json_encode($data);
 ?>