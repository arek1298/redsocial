<?php
session_start();

if (!isset($_SESSION["usuario_id"])) {
    header("Location: login.php");
    exit();
}

include("conexion.php"); // Incluye el archivo de conexión

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["estado_id"]) && isset($_GET["dar_like"])) {
    $usuarioId = $_SESSION["usuario_id"];
    $estadoId = $_GET["estado_id"];
    $darLike = $_GET["dar_like"] === "true"; // Convierte el valor en un booleano

    if ($darLike) {
        // Registrar el like
        $sql = "INSERT INTO likes (usuario_id, publicacion_id) VALUES ('$usuarioId', '$estadoId')";
        $conn->query($sql);
    } else {
        // Eliminar el like
        $sql = "DELETE FROM likes WHERE usuario_id = '$usuarioId' AND publicacion_id = '$estadoId'";
        $conn->query($sql);
    }
}
?>
