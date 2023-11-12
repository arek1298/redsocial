<?php
// Coloca aquí tu lógica para obtener las notificaciones del usuario actual desde la base de datos
// Debes generar el HTML necesario para mostrar las notificaciones

// Ejemplo de HTML para una notificación
$notificationHTML = '<a href="#">Notificación 1</a>';
$notificationHTML .= '<a href="#">Notificación 2</a>';

echo $notificationHTML;

// Después de agregar un amigo, agrega una notificación de amigo agregado
$remitenteId = $_SESSION["usuario_id"];
$destinatarioId = $amigoId; // ID del amigo agregado
$mensaje = "Te ha agregado como amigo.";
$tipo = "amigo_agregado"; // Nuevo campo de tipo

$sql = "INSERT INTO notificaciones (remitente_id, destinatario_id, tipo, mensaje) VALUES ('$remitenteId', '$destinatarioId', '$tipo', '$mensaje')";
$conn->query($sql);

?>
