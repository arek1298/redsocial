<?php
session_start();

if (!isset($_SESSION["usuario_id"])) {
    header("Location: login.php");
    exit();
}

include("db.php"); // Incluye el archivo de conexión

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombreAmigo = $_POST["nombre_amigo"];
    $usuarioId = $_SESSION["usuario_id"];

    // Buscar al amigo por su nombre de usuario
    $sql = "SELECT id FROM usuarios WHERE usuario = '$nombreAmigo'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $amigoId = $row["id"];

        // Agregar amigo a la tabla de amigos
        $sql = "INSERT INTO amigos (usuario_id, amigo_id) VALUES ('$usuarioId', '$amigoId')";
        $conn->query($sql);

        echo "Amigo agregado exitosamente.";
    } else {
        echo "Usuario no encontrado. Verifica el nombre de usuario del amigo.";
    }
}

?>
