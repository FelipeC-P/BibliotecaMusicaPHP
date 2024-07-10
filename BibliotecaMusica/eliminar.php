<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base de datos PHP/MYSQL</title>
    <link rel="stylesheet" href="assets/css/consulta.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>

<body>
    <?php
    include "session.php";
    include "conexion.php";

    echo "<div class='msform'>";
    echo "<h2 class='fs-title'>Canciones 2023</h2>";
    echo "<div class='song-list'>";

    if (isset($_POST['idEliminar'])) {
        $idEliminar = $_POST['idEliminar'];

        // Consulta para verificar si el ID existe
        $queryVerificar = "SELECT idCancion FROM canciones2023 WHERE idCancion = $idEliminar";
        $resultVerificar = $mysqli_conexion->query($queryVerificar);

        if ($resultVerificar->num_rows > 0) {
            //El ID existe
            $queryEliminar = "DELETE FROM canciones2023 WHERE idCancion = $idEliminar";
            if ($mysqli_conexion->query($queryEliminar)) {
                echo "<p>Canción eliminada exitosamente.</p>";
                //enviar al archivo consulta.php
                header("Location: consulta.php");
                exit();
            } else {
                echo "<p>Error al eliminar la canción.</p>";
            }
        } else {
            header("Location: formEliminar.php?error=" . "El ID de la canción no existe.");
        }
    }

    echo "</div>";
    echo "</div>";
    echo "</div>";

    $result->free();
    ?>

</body>

</html>