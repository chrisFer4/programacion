<?php


require('../connection/connection.php');

$id_comentario = $_GET['id_comentario'];

$query = "DELETE FROM comentarios WHERE id_comentario = '$id_comentario'";

$ejecutar = mysqli_query($connection, $query);

header("Location:../index.php");

?>