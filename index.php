
<!DOCTYPE html>
<html>
<head>
    <title>Registro de Usuarios</title>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/css/alertify.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/alertify.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

   
    <link rel="stylesheet" href="css/estilo1.css">
 
    
</head>
<body>
    <h2>Registro de Usuarios</h2>
    <form id="registroForm" method="post" action="php/registrar.php">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br><br>
        
        <label for="usuario">Nombre de usuario:</label>
        <input type="text" name="usuario" required><br><br>
        
        <label for="contraseña">Contraseña:</label>
        <input type="password" name="contraseña" required><br><br>
        
        <input type="submit" value="Registrar">
        <a href="login.html">¿Ya tienes una cuenta?</a>
    </form>
    

  

</body>
</html>
