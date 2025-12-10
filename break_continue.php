<?php
/*

$c=1;
while($c<=20){
    echo $c."<br>";
    if($c==10){
        break;
    }
    $c++; 
}

*/

/*
$pc=["SD","SSD","GPU","RAM","CPU"];
foreach($pc as $componente){
    if($componente=="GPU"){
        continue;
    }
    echo $componente."<br>";
}
*/

$i=1;
while($i<=10){
    if($i==5){
        $i++;
        continue;
    }
    echo $i."<br>";
    $i++;
}