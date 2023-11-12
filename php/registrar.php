<?php
include("db.php"); // Incluye el archivo de conexión

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $usuario = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];
    
    // Hashear la contraseña para mayor seguridad (cambiar 'tu_salto' por un valor seguro)
    $hashContraseña = password_hash($contraseña, PASSWORD_DEFAULT, ['cost' => 12]);
    
    // Insertar los datos en la base de datos
    $sql = "INSERT INTO usuarios (nombre, usuario, contraseña) VALUES ('$nombre', '$usuario', '$hashContraseña')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>Registro exitoso. ¡Bienvenido, $nombre! </script>";
    } else {
        echo "<script>Error en el registro:  </script>" . $conn->error;
    }
   

    #if ($conn->query($sql) === TRUE) {
        #echo "<script>
                #var registroExitoso = 'Registro exitoso. ¡Bienvenido, $nombre!';
                
               
                
              #</script>";
    #} else {
        #echo "<script>var errorRegistro = 'Error en el registro: " . $conn->error . "';</script>";
    #}
    
    
    
    // Cierra la conexión
    $conn->close();
}
?>


