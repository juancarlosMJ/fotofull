<?php 
$idPersona = $_POST['idPersona'];
$nombre = $_POST['nombre'];
$apellidoA = $_POST['apellidoA'];
$apellidoM = $_POST['apellidoM'];
$sexo = $_POST['sexo'];
$matricula = $_POST['matricula'];
$especialidad = $_POST['especialidad'];

include "../servidor/conexion.php";
    $conexion = conexion();
    $sql = "UPDATE t_lista 
            SET nombre = '$nombre',
                    apellidoPaterno = '$apellidoA',
                    apellidoMaterno = '$apellidoM',
                    sexo = '$sexo',
                    matricula = '$matricula',
                    especialidad = '$especialidad',
                    WHERE id_persona = '$idPersona'";
    $respuesta = mysqli_query($conexion, $sql);

    if ($respuesta) {
        header("location:../index.php");
    } else { 
        echo "No se pudo actualizar :(";
    }