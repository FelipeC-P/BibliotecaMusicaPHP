<?php
include "session.php";
include "conexion.php";
$idCancion = $_POST['idCancion'];
$nombre = $_POST['nombre'];
$artista = $_POST['artista'];
$album = $_POST['album'];
$duracion = $_POST['duracion'];

$query = "INSERT INTO canciones2023(idCancion, nombre, artista, album, duracion) VALUES 
    ('$idCancion', '$nombre', '$artista', '$album', '$duracion'); ";
if (mysqli_query($mysqli_conexion, $query)) {
    echo "Nuevos registros agregados correctamente";
    //enviar al archivo consulta.php
    header("Location: consulta.php");
    exit();
} else {
    //enviar al form
    header("Location: formAgregar.php?error=" . "Error: ID duplicada.");
}
mysqli_close($mysqli_conexion);

?>