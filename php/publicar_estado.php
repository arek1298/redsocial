<?php
session_start();

if (!isset($_SESSION["usuario_id"])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera el estado del formulario
    $estado = $_POST["estado"];
    
    // Conecta a la base de datos y guarda el estado en la tabla correspondiente
    include("db.php"); // Asegúrate de incluir tu archivo de conexión
    $usuarioId = $_SESSION["usuario_id"];
    $sql = "INSERT INTO estados (usuario_id, contenido) VALUES ('$usuarioId', '$estado')";
    $conn->query($sql);
    $conn->close();
}

// Redirige de vuelta a la página de inicio
header("Location: inicio.php");
?>
