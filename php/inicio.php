<?php
session_start();




if (!isset($_SESSION["usuario_id"])) {
    header("Location: login.php");
    exit();
}

include("db.php"); // Incluye el archivo de conexión

// Recupera los estados de la base de datos
$sql = "SELECT usuarios.nombre, estados.contenido, estados.fecha
        FROM estados
        INNER JOIN usuarios ON estados.usuario_id = usuarios.id
        ORDER BY estados.fecha DESC";

$result = $conn->query($sql);

?>


<!DOCTYPE html>
<html>
<head>
    <title>Página de Inicio</title>
    <link rel="stylesheet" href="../css/estilos2.css">
    <!-- Agrega este código en la parte superior de tu página, en la sección HEAD -->
<link rel="stylesheet" href="../css/noti.css">



</head>
<body>
    <!-- Agrega este código en el cuerpo de tu página, donde quieras mostrar el menú de notificaciones -->
<div class="dropdown">
    <button class="dropbtn">Notificaciones</button>
    <div class="dropdown-content" id="notificationDropdown">
        <!-- Aquí se mostrarán las notificaciones -->
    </div>
</div>
    <h2>Bienvenido, <?php echo $_SESSION["usuario_nombre"]; ?>!</h2>

    <!--AMIGOS-->
    <form method="post" action="agregar_amigo.php">
    <label for="nombre_amigo">Buscar amigo:</label>
    <input type="text" name="nombre_amigo" required>
    <input type="submit" value="Buscar y Agregar">
</form>


    <!-- Formulario para publicar un estado -->
    <form method="post" action="publicar_estado.php">
        <textarea name="estado" rows="3" placeholder="Escribe tu estado aquí" required></textarea>
        <br>
        <input type="submit" value="Publicar Estado">
        
    </form>
   


    <!-- Mostrar los estados -->
    <h3>Estados Recientes:</h3>
    <ul>
    <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<li><strong>" . $row["nombre"] . ":</strong> " . $row["contenido"] . " (Publicado el " . $row["fecha"] . ")</li>";
            }
        } else {
            echo "<p>No hay estados para mostrar.</p>";
        }
        ?>
    </ul>
</ul>
    
   

    <a href="destruir.php">Cerrar Sesión</a>
   
 

</body>
</html>
