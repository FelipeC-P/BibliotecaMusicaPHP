<?php
include "session.php";
include "conexion.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base de datos PHP/MYSQL</title>
    <link rel="stylesheet" href="assets/css/actualizar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>

<body>

    <header>
        <nav class="nav">
            <a href="formAgregar.php">Agregar</a>
            <a href="consulta.php">Consultar</a>
            <a href="formActualizar.php">Actualizar</a>
            <a href="formEliminar.php">Eliminar</a>
            <a href="home.php" class="loggedIn">
                <div class="user--avatar"><img src="assets/img/avatar.png" alt=""></div>
                <?php echo "<h3 class='user--name'>$username</h3>" ?>
                <span class="user--status">Inicio</span>
            </a>
            <a href="logout.php">Salir</a>
        </nav>
    </header>

    <div class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['idActualizar'])) {
                $idActualizar = $_POST['idActualizar'];

                $query = "SELECT * FROM canciones2023 WHERE idCancion = $idActualizar";
                $resultado = $mysqli_conexion->query($query);

                if ($resultado->num_rows > 0) {
                    echo '<form method="post" action="guardar_datos.php" name="Form1" id="msform">';
                    echo '<fieldset>';
                    echo '<h2 class="fs-title">Canciones 2023</h2>';

                    while ($row = $resultado->fetch_assoc()) {
                        echo '<div class="input-group">';
                        echo '<div class="input-box">';
                        echo '<input type="hidden" name="idActualizar" value="' . $row["idCancion"] . '">';
                        echo '<input type="text" id="nombreNuevo" name="nombreNuevo" placeholder="Nombre nuevo" value="' . $row["nombre"] . '" required>';
                        echo '</div>';
                        echo '</div>';

                        echo '<div class="input-group">';
                        echo '<div class="input-box">';
                        echo '<input type="text" id="artistaNuevo" name="artistaNuevo" placeholder="Artista nuevo" value="' . $row["artista"] . '" required>';
                        echo '</div>';
                        echo '</div>';

                        echo '<div class="input-group">';
                        echo '<div class="input-box">';
                        echo '<input type="file" id="album" name="album" placeholder="Album nuevo" value="' . $row["album"] . '">';
                        echo '</div>';
                        echo '</div>';

                        echo '<div class="input-group">';
                        echo '<div class="input-box">';
                        echo '<input type="text" id="duracion" name="duracion" placeholder="Duracion" value="' . $row["duracion"] . '">';
                        echo '</div>';
                        echo '</div>';
                    }

                    echo '<button type="submit" id="submit" value="enviar" class="submit action-button">Enviar</button>';
                    echo '</fieldset>';
                    echo '</form>';
                } else {
                    //enviar al archivo consulta.php
                    header("Location: formActualizar.php?error=" . "No se encontraron canciones con el ID especificado.");
                }

                $resultado->free();
            }
        }
        ?>
    </div>
</body>

</html>