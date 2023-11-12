<?php
$servername = "localhost"; // Cambia localhost si tu base de datos está en otro servidor
$username = "root";
$password = "";
$database = "red";

// Crear una conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

#echo "Conexión exitosa"; // Esto es opcional, solo para verificar que la conexión se ha realizado correctamente.
?>
