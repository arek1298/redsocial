<?php
session_start(); // Inicia la sesión si no está iniciada

// Destruye la sesión
session_destroy();

// Redirige al usuario a una página de inicio o a donde desees
header("Location: ../index.html"); // Cambia "index.php" por la página a la que quieras redirigir al usuario después de cerrar sesión
?>
