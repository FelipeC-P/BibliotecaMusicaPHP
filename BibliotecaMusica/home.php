z<?php
include "session.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base de datos PHP/MYSQL</title>
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-BzFWN9vK6hD/9Yek3eC4VS4C/zGz7uV3nIv1lVMrDfGQDQzh4J5ptqKdBS07uwH6GP6RvN1Xkz8WG+ykCsLcCw=="
        crossorigin="anonymous" />
</head>

<body>

    <header>
        <nav class="nav">
            <a href="formAgregar.php">Agregar</a>
            <a href="consulta.php">Consultar</a>
            <a href="formActualizar.php">Actualizar</a>
            <a href="formEliminar.php">Eliminar</a>
            <a href="#" class="loggedIn">
                <div class="user--avatar"><img src="assets/img/avatar.png" alt=""></div>
                <?php echo "<h3 class='user--name'>$username</h3>"?>
                <span class="user--status">Canciones 2023</span>
            </a>
            <a href="logout.php">Salir</a>
        </nav>
    </header>

    <main>
        <div class="container">
            <h1>¡Bienvenido!</h1>
            <br><br>
            <div class="buttons">
                <button class="neumorphic" onclick="location.href = 'formAgregar.php';">
                    <i class="fa-light fa-add"></i>
                    <span>Agregar</span>
                </button>

                <button class="neumorphic" onclick="location.href = 'consulta.php';">
                    <i class="fa-light fa-magnifying-glass"></i>
                    <span>Consultar</span>
                </button>

                <button class="neumorphic" onclick="location.href = 'formActualizar.php';">
                    <i class="fa-light fa-pen-to-square"></i>
                    <span>Actualizar</span>
                </button>

                <button class="neumorphic" onclick="location.href = 'formEliminar.php';">
                    <i class="fa-light fa-trash"></i>
                    <span>Eliminar</span>
                </button>
            </div>
        </div>
    </main>
</body>

</html>