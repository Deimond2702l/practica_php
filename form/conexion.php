<?php
// Datos de conexión
$servername = "localhost";   // o la IP de tu servidor
$username   = "root";
$password   = "";
$database   = "proyectos_php";


$conn = new mysqli($servername, $username , $password, $database);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

?>