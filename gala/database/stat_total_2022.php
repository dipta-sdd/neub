<?php
    require 'database.php';
    $max_score='';
    $sql="select MAX(score) as max from (select COUNT(player) as score,player from email2024 where player is not null and task2='true' GROUP by `player`) as t";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $max_score=$row['max'];

    $sql="select COUNT(player) as score,player from email2024 where player is not null and task2='true' GROUP by `player` order by score desc ;";
    $result = $conn->query($sql);
    $data ="";
    while($row = $result->fetch_assoc()) {
        $data.='<div class="progress m-2"><div class=" progress-bar bg-primary" role="progressbar" style="width: '.($row['score'] * (100/$max_score) ) .'%;"aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">'. $row['player'].' '. $row['score'] .'</div></div>';
    }
    $sql="select COUNT(player) as score from email2024 where player is not null and task2='true';";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
        $data.='<div class="progress m-2"><div class=" progress-bar bg-primary" role="progressbar" style="width: '.($row['score'] /2) .'%;"aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"> Total  ' .$row['score'] .'</div></div>';
    }

    echo $data;
 ?>