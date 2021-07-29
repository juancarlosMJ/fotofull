<?php

    $idPersona = $_POST['idPersona'];
    include "servidor/conexion.php";
    $conexion = conexion();
    $sql = "SELECT  id_persona,
                    nombre,
                    apellidoPaterno,
                    apellidoMaterno,
                    sexo,
                    fechaNacimiento,matricula,especialidad FROM t_lista
            WHERE id_persona = '$idPersona'";
    $respuesta = mysqli_query($conexion, $sql);

    $datos = mysqli_fetch_array($respuesta);
?>
<?php  include 'header.php'; ?>

<div class="container text-center">
    <h1 class="mt-5 text-white font-weight-light">ACTUALIZAR</h1>
    <p class="lead text-white-50">
    <div class="row">
        <div class="col-sm-12">
            <form action="servidor/actualizarPersona.php" method="POST">
                <div class="row">
                    <div class="col">
                    <input type="text" name="idPersona" id="idPersona" value="<?php echo $datos['id_persona'] ?>" hidden>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <label for="nombre">Nombre</label>
                        <input type="text" id="nombre" name="nombre" required class="form-control" 
                        value="<?php echo $datos['nombre'] ?>">
                    </div>
                    <div class="col-sm-6">
                        <label for="apellidoA">Apellido Paterno</label>
                        <input type="text" name="apellidoA" id="apellidoA" required class="form-control" 
                        value="<?php echo $datos['apellidoPaterno'] ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <label for="apellidoM">Apellido Materno</label>
                        <input type="text" name="apellidoM" id="apellidoM" required class="form-control" 
                        value="<?php echo $datos['apellidoMaterno'] ?>">

                    </div>
                    <div class="col-sm-6">
                        <label for="sexo">Sexo</label>
                        <input type="text" name="sexo" id="sexo" required class="form-control" 
                        value="<?php echo $datos['sexo'] ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <label for="fecha">Seleccionar Fecha</label>
                        <input type="date" required class="form-control" name="fecha" id="fecha" 
                        value="<?php echo $datos['fechaNacimiento'] ?>">
                    </div>
                    </div>
                    <div class="col-sm-6">
                        <label for="matricula">matricula</label>
                        <input type="number" name="matricula"  required class="form-control" 
                        value="<?php echo $datos['matricula'] ?>">
                    </div>

                    <div class="col-sm-6">
                        <label for="especialidad">especialidad</label>
                        <input type="text" name="especialidad"  required class="form-control" 
                        value="<?php echo $datos['especialidad'] ?>">
                    </div>

                    <div class="col-sm-6">
                    </div>
                </div>
                <br>
                <button class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
    <br>
    </p>
</div>
<?php  include 'footer.php'; ?>
