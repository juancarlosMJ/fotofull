<?php
    function conexion() {
        $servidor = "localhost";
        $usuario = "root";
        $password = "";
        $db = "lista";
        $conexion = mysqli_connect($servidor, $usuario, $password, $db);

        return $conexion;
    }
?>