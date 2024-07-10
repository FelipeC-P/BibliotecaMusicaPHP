<?php
include "session.php";
include "conexion.php";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/formAgregar.css">
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

    <main>
        <div class="container">
            <form action="actualizar.php" method="post" name="Form2" id="msform">
                <fieldset>
                    <h2 class="fs-title">Canciones 2023</h2>
                    <?php
                    if (isset($_GET['error'])) {
                        $error_message = $_GET['error'];
                        echo "<h3 class='fs-subtitle-error'>$error_message</h3>";
                    } else {
                        echo '<h3 class="fs-subtitle">Actualizar canción</h3>';
                    }
                    ?>
                    <br>

                    <div class="input-group">
                        <div class="input-box">
                            <input type="number" id="idActualizar" name="idActualizar"
                                placeholder="Ingresa el ID canción" required>
                        </div>
                    </div>

                    <button type="submit" id="submit" value="enviar" class="submit action-button">Consultar</button>

                </fieldset>
            </form>

        </div>
    </main>

</body>

</html>