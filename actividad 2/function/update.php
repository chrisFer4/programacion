<?php

//print_r($_POST);

require("../connection/connection.php");

$id_comentario = $_POST[ 'id_comentario' ];
$nombre = $_POST[ 'nombre' ];
$apellido = $_POST[ 'apellido' ];
$email = $_POST[ 'email' ];
$telefono = $_POST[ 'telefono' ];
$comentario = $_POST[ 'comentario' ];
$query = "UPDATE comentarios SET nombre = '$nombre', apellido = '$apellido', email = '$email', telefono = '$telefono', comentario = '$comentario' WHERE id_comentario = $id_comentario";

$ejecutar = mysqli_query($connection, $query);

header("Location: ../index.php");

?>