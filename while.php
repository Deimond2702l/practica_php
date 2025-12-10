<?php

/**
 * ESTRUCTURAS REPETITIVAS (Ciclos | Bucles | Loops)
 * 
 * Las estructuras repetitivas son aquellas que reiteran una o un grupo de instrucciones "n" veces y dependen de una variable de control ciclo llamada contador. Es decir, ejecutan una o varias instrucciones un número de veces definido.
 * 
 * Los cuatro bucles en PHP son el bucle WHILE, el bucle FOR, el bucle DO-WHILE y el bucle FOREACH.
 */

/**
 * CICLO WHILE(Mientras que)
 * 
 * La instrucción while(mientras) ejecuta una porción de programa mientras se cumpla una cierta condición. Mientras la condición sea verdadera, se ejecutan las instrucciones contenidas en el while. Cuando deja de cumplirse la condición, se sale del ciclo y se continúa ejecutando el resto del programa.
 * 
 * Estructuras del while
 * 
 *  while(Condición){
 *  Código a ejecutar 
 * }
 * 
 * 
 *  while(Condición):
 *  Código a ejecutar 
 *  endwhile;
 */



    $c=12;
    $num=5;
    while($c>=1){
        echo $num." X ".$c." = ".$num*$c."<br>";
        $c--;
    }