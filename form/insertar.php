<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre   = $_POST["nombre"];
    $correo   = $_POST["correo"];
    $telefono = $_POST["telefono"];

    // Preparamos la consulta
    $sql = "INSERT INTO usuarios (nombre, correo, telefono) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $nombre, $correo, $telefono);

    if ($stmt->execute()) {
        echo "<h2>✅ Registro exitoso</h2>";
        echo "<a href='index.html'>Volver al formulario</a>";
    } else {
        echo "❌ Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
