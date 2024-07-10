<?php
session_start();

if (isset($_POST['user'], $_POST['password'])) {
    include "conexion.php";

    $user = $mysqli_conexion->real_escape_string($_POST['user']);
    $password = $mysqli_conexion->real_escape_string($_POST['password']);

    //consulta para verificar credenciales
    $query = "SELECT id FROM usuarios WHERE user='$user' AND password='$password'";
    $result = $mysqli_conexion->query($query);

    if ($result->num_rows == 1) {

        $_SESSION['user'] = $user;
        $result->free();
        $mysqli_conexion->close();
        header("Location: home.php");
        exit();
    } else {
        //credenciales incorrectas
        $result->free();
        $mysqli_conexion->close();
        header("Location: index.php?error=" . urlencode("Usuario o contraseña incorrectos"));
        exit();
    }
} else {
    header("Location: index.php");
    exit();
}
?>