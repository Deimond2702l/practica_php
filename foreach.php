<?php

/**
 * CICLO FOREACH
 * 
 * El ciclo FOREACH proporciona un modo sencillo de iterar sobre arrays. FOREACH funciona sólo sobre arrays y emitirá un error al intentar usarlo con una variable de un tipo diferente de datos o una variable no incializada. Existen dos sintaxis:
 * 
 *  foreach($array as $valor){
 *      $valor tendrá en cada iteración un valor del array
 *  }
 * 
 * 
 *  foreach($array as $clave => $valor){
 *      $clave tendrá en cada iteración una clave del array
 *      
 *      $valor tendrá en cada iteración un valor del array
 * }
 */

/*
    $laptop=["Acer Nitro 5","Windows 11","AMD Ryzen 5 4600H","SSD 257GB","RAM 24GB"];

    $frutas=[
        "Fresas"=>100,
        "Peras"=>30,
        "Sandias"=>10,
        "Melocotones"=>17,
        "Manzanas"=>9
    ];

    foreach($frutas as $clave => $valor){
       echo "Hay ".$valor." ".$clave." en el inventario"."<br>";
    }
*/


    $productos = [
        ['codigo' => "A0001", "descripcion" => 'Mouse'],
        ['codigo' => "A0002", "descripcion" => 'Teclado'],
        ['codigo' => "A0003", "descripcion" => 'Monitor'],
        ['codigo' => "A0004", "descripcion" => 'Impresor']
    ];

    foreach($productos as $prod){
        echo $prod['codigo']." - ".$prod['descripcion']."<br>";
    };