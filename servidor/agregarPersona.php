<?php
    $nombre = $_POST['nombre'];
    $apellidoA = $_POST['apellidoA'];
    $apellidoM = $_POST['apellidoM'];
    $sexo = $_POST['sexo'];
    $fecha = $_POST['fecha'];    
    $matricula = $_POST['matricula'];
    $especialidad = $_POST['especialidad'];

    include "../servidor/conexion.php";
    $conexion = conexion();

    $sql = "INSERT INTO t_lista (nombre, apellidoPaterno, apellidoMaterno, sexo, 
                        fechaNacimiento,matricula,especialidad) 
            VALUES ('$nombre', '$apellidoA', '$apellidoM', '$sexo','$fecha','$matricula','$especialidad')";
    $respuesta = mysqli_query($conexion, $sql);

    if ($respuesta) {
        header("location:../index.php");
    } else {
        echo "No se pudo agregar :(";
    }

?>