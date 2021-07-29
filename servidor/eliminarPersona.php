<?php

    $idPersona = $_POST['idPersona'];

    include "../servidor/conexion.php";
    $conexion = conexion();

    $sql = "DELETE FROM t_lista WHERE id_persona = '$idPersona'";
    $respuesta = mysqli_query($conexion, $sql);

    if ($respuesta) {
        header("location:../index.php");
    } else {
        echo "No se pudo eliminar";
    }
?>