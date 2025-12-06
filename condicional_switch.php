<?php

/**
 * Condicional SWITCH
 * 
 * La sentencia switch es similar a una serie de sentencias IF en la misma expresión.
 * 
 * En muchas ocasiones, es posible que se quiera comparar la misma variable (o expresión) con muchos valor diferentes, y ejecutar una parte de código distinta dependiendo de a que valor es igual. Para esto es exactamente la expresión switch.
 * 
 * La comparación es una comprobación de igualdad débil (==)
 */

/**
 * Estructura de la condicional SWITCH
 *  
 * switch(Variable){
 *  case valor1:
 *      Código a ejecutar
 *  break;
 * 
 *  case valor2:
 *      Código a ejecutar
 *  break;
 * 
 *  default:
 *      Código a ejecutar
 * }
 */
/**
 * Ejercicio (SWITCH)
 * 
 * Se desea diseñar un programaque escriba los días de la semana en función del valor de una variable DIA.
 * 
 * Los días de la semana son 7; por consiguiente, el rango de valores de DIA tome un valor fuera de este rango se deberá producir un mensaje de error advirtiendo la situación anómala.
 */



    $dia=1;

    switch($dia){
        case 1:
            echo "Lunes";
        break;
        case 2:
            echo "Martes";
        break;
        case 3:
            echo "Miercoles";
        break;
        case 4:
            echo "Jueves";
        break;
        case 5:
            echo "Viernes";
        break;
        case 6:
            echo "Sabado";
        break;
        case 7:
            echo "Domingo";
        break;
        default:
            echo "Introduce un valor valido";

    }