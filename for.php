<?php

/**
 * CICLO FOR
 * 
 * La estructura repetitiva FOR(para) se utiliza generalmente cuando tenemos bien determinada la cantidad de repeticiones a realizar. Se diferencia de las anteriores en que se debe incluir en la propia instrucción una variable de control, la cual se incrementa o decrementa de forma automática.
 * 
 * Primera estructura de FOR
 * 
 * for(var; Condición;incre | decre){
 *  Código a ejecutar
 * }
 * 
 * Segunda estructura de FOR
 * 
 * for(var; Condición; incre | decre):
 *   Código a ejecutar
 * endfor;
 * 
 */

    $num=7;
    for($i=12; $i>=1; $i--){
        echo $num." X ".$i." = ".$i*$num."<br>";
    }