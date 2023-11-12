<?php
include("db.php"); // Incluye el archivo de conexión

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];
    
    // Buscar al usuario en la base de datos
    $sql = "SELECT id, nombre, contraseña FROM usuarios WHERE usuario = '$usuario'";
    $result = $conn->query($sql);
    
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $hashedContraseña = $row["contraseña"];
        
        // Verificar la contraseña
        if (password_verify($contraseña, $hashedContraseña)) {
            session_start();
            $_SESSION["usuario_id"] = $row["id"];
            $_SESSION["usuario_nombre"] = $row["nombre"];
            header("Location: inicio.php"); // Redirigir al usuario a la página de inicio
        } else {
            echo "Contraseña incorrecta. Intenta de nuevo.";
        }
    } else {
        echo "Nombre de usuario no encontrado. Regístrate si no tienes una cuenta.";
    }
    
    // Cierra la conexión
    $conn->close();
}
?>
