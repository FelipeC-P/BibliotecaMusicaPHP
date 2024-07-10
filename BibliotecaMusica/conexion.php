<?php
    $mysqli_conexion = new mysqli("localhost", "root", "", "musica2023");

    if($mysqli_conexion -> connect_errno){
        echo "Error de conexion".$mysqli_conexion -> connect_errno;
    }else{
        
    }
?>