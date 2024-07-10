<?php
include "session.php";
include "conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idActualizar = $_POST['idActualizar'];
    $nombreNuevo = $_POST['nombreNuevo'];
    $artistaNuevo = $_POST['artistaNuevo'];
    $albumNuevo = $_POST['album'];
    $duracion = $_POST['duracion'];

    // Actualizar los datos en la base de datos
    $query = "UPDATE canciones2023 SET nombre='$nombreNuevo', artista='$artistaNuevo', album='$albumNuevo', duracion='$duracion' WHERE idCancion=$idActualizar";
    if ($mysqli_conexion->query($query) === TRUE) {
        echo "Los datos se actualizaron correctamente.";
        //enviar al archivo consulta.php
        header("Location: consulta.php");
        exit();
    } else {
        echo "Error al actualizar los datos: " . $mysqli_conexion->error;
    }
}
?>