<?php

/**
 * INCLUDE & REQUIRE
 * 
 * Ambas funciones sirven para añadir otros ficheros a nuestros scripts en PHP.
 * 
 * INCLUDE: Inserta en nuestro script un código procedente de otro archivo, si no existe dicho archivo o si contiene algun tipo de error nos mostrará un 'WARNING' por pantalla y el script seguirá ejecutándose.
 * 
 * REQUIRE: Hace la misma operación que include, pero en caso de no existir el archivo o error en el mismo mostrará un 'fatal error' y el script no se sigue ejecutando.
 */

/**
 * 
 *  include ("ruta_archivo.php");
 *  include "ruta_archivo.php";
 * 
 *  include_once ("ruta_archivo.php");
 *  include_once "ruta_archivo.php";
 * 
 * 
 *  require ("ruta_archivo.php");
 *  require "ruta_archivo.php";
 * 
 *  require_once ("ruta_archivo.php");
 *  require_once "ruta_archivo.php";
 */