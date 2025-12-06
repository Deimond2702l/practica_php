<?php

/**
 * MATCH
 * 
 * La expresión match ramifica la evaluación basada en una comprobación de identidad de un valor. De forma similar a una sentencia switch, una expresión match tiene una expresión de sujeto que se compara con múliples alternativas.
 * 
 * A diferencia de switch, la comporación es una comprobación de identidad (===) en lugar de una comprobación de igualdad débil (==). Las expresiones match están disponibles a partir de PHP 8.0.0.
 * 
 * Su estructura es la siguiente:
 * 
 * match(Variable){
 *  $variable=>Código a ejecutar,
 *  
 *  default=> Código a ejecutar
 *  
 * };
 */

/*
    $a=9;
    $x=10;
    $y=9;
    $z=7;

    $resultado= match($a){
        $x, $y => "Valor igual a X o Y",
        7 => "Hola mundo.",
        default => "No coincide con ninguna variable"
    };

    echo $resultado;
*/


    $edad=78;

    $resultado = match(true){
        $edad >= 60 => "Eres de la tercera edad.",
        $edad >= 30 => "Eres adulto.",
        $edad >= 18 => "Eres adulto joven.",
        default => "Eres un niño o niña"
    
    };

    echo $resultado;