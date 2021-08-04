<?php require_once("./mysql/conexion.php"); ?>

<?php require_once("head.php"); ?>

<?php require_once("header.php"); ?>
<center>
    <h1 class="mb-5">Administrador de Cursos</h1>
    <table class="col-md-12">
        <thead>
            <tr class="bg-primary">
                <th class="pad-basic">Curso</th>
                <th class="pad-basic">Nombre del Perfil</th>
                <th class="pad-basic">Nombre del Profesor </th>
                <th class="pad-basic">Aula </th>
                <th class="pad-basic">Turno</th>
                <th class="pad-basic">Minimo de Alumnos</th>
                <th class="pad-basic">Maximo de Alumnos</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>


                <td>@mdo</td>
                <td rowspan="1"><button type="button" class="btn btn-secondary btn col-4">Modificar</button></td>
                <td rowspan="1"><button type="button" class="btn btn-danger btn col-4">Eliminar</button></td>
            </tr>
        </tbody>
    </table>

    <div class="row container">
        <button type="button" class="btn btn-primary btn col-2">Agregar</button>
    </div>

</center>

<?php require_once("endofpage.php");
