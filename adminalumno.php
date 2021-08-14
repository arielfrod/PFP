<?php require_once("./mysql/conexion.php"); ?>

<?php require_once("head.php"); ?>

<?php require_once("header.php"); ?>
<?php if (isset($_SESSION['message'])) { ?> <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message'] ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php session_unset();
} ?>

<center>
    <h1 class="mb-8">Administrador de Alumnos</h1>
    <main class="container p-4">
        <div class="row">
            <div class="col-md-3">
                <div class="card card-body">
                    <form action="guardaralumno.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="nombre" class="form-control" placeholder="Nombre del Alumno" autofocus>
                        </div>
                        <div class="form-group">
                            <input type="text" name="apellido" class="form-control" placeholder="Apellido del Alumno">
                        </div>
                        <div class="form-group">
                            <input type="text" name="dni" class="form-control" placeholder="Nro de DNI">
                        </div>
                        <div class="form-group">
                            <input type="text" name="edad" class="form-control" placeholder="Edad">
                        </div>
                        <div class="form-group">
                            <input type="text" name="direccion" class="form-control" placeholder="Direccion/Domicilio">
                        </div>
                        <div class="form-group">
                            <input type="text" name="telefono" class="form-control" placeholder="Nro de Teléfono">
                        </div>
                        <div class="form-group">
                            <input type="text" name="condicion" class="form-control" placeholder="Condición">
                        </div>
                        <div class="form-group">
                            <input type="text" name="estado" class="form-control" placeholder="Estado">
                        </div>
                        <input type="submit" name="guardar_alumno" class="btn btn-success btn-block" value="Guardar Alumno">
                    </form>
                </div>
            </div>

            <div class="col-md-8">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>DNI</th>
                            <th>Edad</th>
                            <th>Direccion</th>
                            <th>Telefono</th>
                            <th>Condicion</th>
                            <th>Estado</th>
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php


                        $sql = 'SELECT * FROM persona inner join alumno on persona.id = alumno.persona_id';
                        $resultado = mysqli_query($conexion, $sql);

                        while ($row = mysqli_fetch_assoc($resultado)) {

                        ?>
                            <tr>
                                <td><?php echo $row['nombre']; ?></td>
                                <td><?php echo $row['apellido']; ?></td>
                                <td><?php echo $row['dni']; ?></td>
                                <td><?php echo $row['edad']; ?></td>
                                <td><?php echo $row['direccion']; ?></td>
                                <td><?php echo $row['telefono']; ?></td>
                                <td><?php echo $row['condicion']; ?></td>
                                <td><?php echo $row['estado']; ?></td>
                                <td>
                                    <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary">
                                        <i class="fas fa-marker"></i>
                                    </a>
                                    <a href="delete_task.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">
                                        <i class="far fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </main>

    <?php require_once("endofpage.php");
