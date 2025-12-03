<?php
    $calificacion_1=7;
    $calificacion_2=8;
    $calificacion_3=10;

    $promedio=($calificacion_1+$calificacion_2+$calificacion_3)/3;

    if($promedio>=7){
        echo "Estudiante aprobado con calificacion: ".$promedio;
    }else{
        echo "Estudiante reprobado con calificacion: ".$promedio;
    }