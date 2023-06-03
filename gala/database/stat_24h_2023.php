<?php
    require 'database.php';

    $sql="select COUNT(player) as score,player from email2023 where player is not null and task2='true' AND `up_time`>= '2023-05-30 00:00:01' GROUP by `player`;";
    $result = $conn->query($sql);
    $data ="";
    while($row = $result->fetch_assoc()) {
        $data.='<div class="progress m-2"><div class=" progress-bar bg-primary" role="progressbar" style="width: '.($row['score'] * 2) .'%;"aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">'. $row['player'].' '. $row['score'] .'</div></div>';
    }
    $sql="select COUNT(player) as score from email2023 where player is not null and task2='true' AND `up_time`>= '2023-05-30 00:00:01';";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
        $data.='<div class="progress m-2"><div class=" progress-bar bg-primary" role="progressbar" style="width: '.($row['score']) .'%;"aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Total '. $row['score'] .'</div></div>';
    }
    echo $data;
 ?>