<?php
    require 'database.php';
    echo date("Y-m-d");
    // $sql="select COUNT(player) as score,player from email2023 where player is not null and task2='true' AND `up_time`>= NOW() -  GROUP by `player`;";
    // $result = $conn->query($sql);
    // $data ="";
    // while($row = $result->fetch_assoc()) {
    //     $data.='<div class="progress m-2"><div class=" progress-bar bg-primary" role="progressbar" style="width: '.($row['score'] * 2) .'%;"aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">'. $row['player'].' '. $row['score'] .'</div></div>';
    // }
    // $sql="select COUNT(player) as score from email2023 where player is not null and task2='true' AND `up_time`>= NOW() - INTERVAL 1 DAY;";
    // $result = $conn->query($sql);
    // while($row = $result->fetch_assoc()) {
    //     $data.='<div class="progress m-2"><div class=" progress-bar bg-primary" role="progressbar" style="width: '.($row['score']) .'%;"aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Total '. $row['score'] .'</div></div>';
    // }
    // echo $data;
 ?>