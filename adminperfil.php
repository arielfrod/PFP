<?php include('mysql/conexion.php'); ?>

<?php include('head.php'); ?>

<?php include('header.php'); ?>

<main class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <!-- MESSAGES -->
            <?php if (isset($_SESSION['message'])) { ?>
                <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message'] ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php session_unset();
            } ?>

            <!-- ADD TASK FORM -->
            <div class="card card-body">
                <form action="guardarperfil.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre del Perfil" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="resolucion" class="form-control" placeholder="Resolucion">
                    </div>
                    <div class="form-group">
                        <input type="text" name="cantidadhoraminima" class="form-control" placeholder="Cantidad de Horas">
                    </div>
                    <div class="form-group">
                        <textarea name="funciones" rows="2" class="form-control" placeholder="Funciones del Perfil"></textarea>
                    </div>
                    <input type="submit" name="guardar_perfil" class="btn btn-success btn-block" value="Guardar Perfil">
                </form>
            </div>
        </div>
        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nombre del Perfil</th>
                        <th>Resolucion</th>
                        <th>Cantidad de Horas</th>
                        <th>Funciones</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $sql = 'SELECT * FROM perfilprofesional';
                    foreach ($conexiondb->query($sql) as $row) { ?>

                        <tr>
                            <td><?php echo $row['nombre']; ?></td>
                            <td><?php echo $row['resolucion']; ?></td>
                            <td><?php echo $row['cantidadhoraminima']; ?></td>
                            <td><?php echo $row['funciones']; ?></td>
                            <td><?php echo $row['created_at']; ?></td>
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
<?php require_once("endofpage.php"); ?>