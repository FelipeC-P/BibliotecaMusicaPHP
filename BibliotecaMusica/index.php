<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base de datos PHP/MYSQL</title>
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-BzFWN9vK6hD/9Yek3eC4VS4C/zGz7uV3nIv1lVMrDfGQDQzh4J5ptqKdBS07uwH6GP6RvN1Xkz8WG+ykCsLcCw=="
        crossorigin="anonymous" />
</head>

<body>
    <div>
        <h1>Canciones 2023</h1>
        <?php
        if (isset($_GET['error'])) {
            $error_message = $_GET['error'];
            echo "<h3 class='fs-subtitle-error'>$error_message</h3>";
        } else {

        }
        ?>

        <div class="login-box">
            <h2>Inicar sesión</h2>
            <form action="login.php" method="post" name="Form1">
                <div class="user-box">
                    <input type="text" name="user" required="">
                    <label>Usuario</label>
                </div>
                <div class="user-box">
                    <input type="password" name="password" required="">
                    <label>Contraseña</label>
                </div>
                
                <button type="submit" id="submit" value="enviar" class="button-29">Enviar</button>
            </form>
        </div>
    </div>
</body>

</html>