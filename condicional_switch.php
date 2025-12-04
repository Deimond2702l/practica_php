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
 * Se desea diseñar un programaque escriba los días de la semana en función del valor de una variable DIA
 */

    $fruta="Fresa";

    switch($fruta){
        case "Fresa":
            echo "Eres una Fresa";
        break;
        case "Pera":
            echo "Eres una Pera";
        break;
        default:
            echo "No eres ni Fresa ni Pera";

    }