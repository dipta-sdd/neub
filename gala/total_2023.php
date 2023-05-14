<?php
require_once 'database.php';
$sql= "SELECT ((((SELECT count(*) FROM `email3` WHERE discord='true' AND task1='true')*100 + (SELECT count(*) FROM `email3` WHERE discord='true' AND task2='true')*200 +(SELECT count(*) FROM `email3` WHERE discord='true' AND task3='true')*400)*0.04) - 
(SELECT count(*)*7 FROM `email3` WHERE discord='true' AND (task1='true' or task2='true' or task3='true'))
+(((SELECT count(*) FROM `email3` WHERE discord='true' AND task1='true')*100 + (SELECT count(*) FROM `email3` WHERE discord='true' AND task2='true')*200 +(SELECT count(*) FROM `email3` WHERE discord='true' AND task3='true')*400)*0.04)*0.25 ) as total; ";

$result = $conn->query($sql);
$row = $result->fetch_assoc();
$total= $row['total'];


$sql= "SELECT count(*)*28 as total FROM `email3`";

$result = $conn->query($sql);
$row = $result->fetch_assoc();
$total_est= $row['total'];
$percent = per($total,$total_est);
$data='<div class="text-start">total : '.fti($total).' $</div>
        <div class="progress mb-2">
            <div class="progress-bar bg-primary" role="progressbar" style="width: '.$percent.'%;"
                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>';
function per(int $a, int $t){
    return fti(($a/$t)/100);
}
function fti(int $a){
    return $a;
}
echo $data;
?>