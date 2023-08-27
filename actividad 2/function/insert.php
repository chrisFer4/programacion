<?php

// exclusivo para testeas recibimiento de datos del form
//print_r($_POST);

require('../connection/connection.php');

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$comentario = $_POST['comentario'];
$query = "INSERT INTO comentarios (nombre,apellido,email,tel,comentario) VALUES ('$nombre','$apellido''$email','$telefono','$comentario')";

$ejecutar = mysqli_query($connection, $query);

header("Location: ../formulario.php");

//print("<br> Nombre del usuario: " . $nombre . " email: " . $email . " tel: ". $telefono);
//echo "<br> Nombre del usuario: {$nombre} email: {$email} tel: {$telefono}";


?>