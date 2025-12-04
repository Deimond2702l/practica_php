<?php

/**
 *  if(condicion){
 *    if(condicion){
 *       Bloque de código a ejecutar si la condición es TRUE
 *    }else{
 *      Bloque de código a ejecutar si la condición es FALSE
 *    }
 *   }elseif(condicion){
 *     Bloque de código a ejecutar si la condición es TRUE
 *   }else{
 *      Bloque de código a ejecutar si la condición es FALSE
 *   }
 */

/**
 * Ejercicio (CONDICIONALES ANIDADAS)
 * 
 * 1- Pida a un usuario la edad y el genero, para que la computadora le indique si ya puede jubilarse. Tome en cuenta que un Hombre se puede jubilar cuando tenga 60 o más, en cambio, una mujer mayor se jubilaria si tiene más de 54 años.
 */


    $edad=52;
    $genero="F";

    if($genero=="M"){
        if($edad>=60){
            echo "Puede jubilarse";
        }else{
            echo "No puede jubirlarse";
        }
    }elseif($genero=="F"){
        if($edad>=54){
            echo "Puede jubilarse";
        }else{
            echo "No puede jubirlarse";
        }
    }else{
        echo "Coloque una opcion valida";
    }