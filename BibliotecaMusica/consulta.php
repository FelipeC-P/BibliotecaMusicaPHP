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
    <link rel="stylesheet" href="assets/css/consulta.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Tilt+Warp&family=Timmana&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

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
        <div id="carrousel">
            <div class="container">
                <p class="fs-title">Exitos 2023</p>
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <?php
                        $query = "SELECT c.*, i.* FROM canciones2023 c JOIN Informacion i ON c.idCancion = i.idCancion";

                        if ($result = $mysqli_conexion->query($query)) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<a href='" . $row["video"] . "' target='_blank'>";
                                echo "<img src='assets/img/" . $row["album"] . "' alt='album'>";

                                echo "<div class='carousel-caption d-none d-md-block'>";
                                echo "<p class='song-name'>" . "ID: " . $row["idCancion"] . "</p>";
                                echo "<h2>" . $row["nombre"] . "</h2>";
                                echo "<p class='song-artist'>" . $row["artista"] . " • " . $row["duracion"] . "</p>";
                                echo "<p class='song-artist'>" . $row["genero"] . " • " . $row["año"] . "</p>";
    
                                echo "</div>";
                                echo "</a>";
                            }

                            echo "</div>";
                            echo "</div>";
                            $result->free();
                        } else {
                            echo "Canción no encontrada.";
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </main>

</body>
<script src="assets/js/consulta.js"></script>

</html>