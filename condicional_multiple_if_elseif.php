<?php
/**Estructura Condicional Multiple (IF-ELSEIF)
 * Elseif, como su nombre lo sugiere, es una combinación de if y else. Del mismo modo que else, extiende una sentencia if para ejecutar una sentencia diferente en caso que la expresion if original se evalue como FALSE. Sin embargo, a diferencia de else, esa expresión alternativa solo se ejecutará si la expresión condicional del elseif se evalúa como TRUE.
 * 
 * 
 * 
 * Ejemplo 1 = Solo es para PHP por que se usan las llaves
 * if($a > $b){
 *  echo "a es mayor que b";
 * }elseif($a == &b){
 *  echo "a es igual que b";
 * }else{
 *  echo "a es menor que b";
 * }
 * 
 * Ejemplo 2 = Solo es para cuando combinamos PHP con HTML o otro lenguaje
 *
 * if($a > $b):
 *  echo "a es mayor que b";
 * elseif($a == &b):
 *  echo "a es igual que b";
 * else:
 *  echo "a es menor que b";
 * endif;
 * 
 * NOTA: Tenga en cuenta que elseif y else if serán considerados exactamente iguales sólamente cuando se utilizan llaves como en el ejemplo anterior. Al utilizar los dos puntos para definir las condiciones if/elseif, no debe separarse "else if" en dos palabras o PHP fallará como un error del interprete.
 * 
 * Ejemplo 1:
 * 
 * if($a > $b):
 *  echo "a es mayor que b";
 * elseif($a == &b):
 *  echo "a es igual que b";
 * else:
 *  echo "a es menor que b";
 * endif;
 * 
 * Ejemplo 2:
 * 
 * if($a > $b):
 *  echo "a es mayor que b";
 * else if($a == &b):
 *  echo "a es igual que b";
 * else:
 *  echo "a es menor que b";
 * endif;
 * 
 * 
 * Ejercicios (IF-ELSEIF)
 * 
 * 1- Se debe diseñar un programa que escriba los nombres de los días de la semana en función del valor de una variable DIA.
 * 
 * 2- En una fábrica de computadoras se planea ofrecer a los clientes un descuento que dependerá del número de computadoras que compre. Si las computadoras son menos de cincose les dara un 10% de descuento sobre el total de la compra; si el número de computadoras es mayor o igual a cinco pero menos de diez se le otorga un 20% de descuento; y si son diez o más se les da un 40% de descueto. El precio de cada computadora es de $700.
 */

/*Solucion del primer ejercicio.  Quitamos los * para que la soluciones sea ejecutada*/
/** 
*    $dia=5;
*
*    if($dia==1){
*        echo "Lunes";
*    }elseif($dia==2){
*        echo "Martes";
*    }elseif($dia==3){
*        echo "Miercoles";
*    }elseif($dia==4){
*        echo "Jueves";
*    }elseif($dia==5){
*        echo "Viernes";
*    }elseif($dia==6){
*        echo "Sábado";
*    }elseif($dia==7){
*        echo "Domingo";
*    }else{
*        echo "Error ha introducido un valor no valido";
*    }   
*/

/*Solucion del segundo ejercicio */


$cantidad=12;

$total=$cantidad*700;

if($cantidad<5){
    $total=$total-($total*0.10);
}elseif($cantidad>=5 && $cantidad<10){
    $total=$total-($total*0.20);
}elseif($cantidad>=10){
    $total=$total-($total*0.40);
}

echo "El total a pagar es $".$total;