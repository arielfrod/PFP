<?php

include('./mysql/conexion.php');

if (isset($_POST['guardar_perfil'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['resolucion'];
    $cantidadhoraminima = $_POST['cantidadhoraminima'];
    $funciones = $_POST['funciones'];

    $sql = "INSERT INTO perfilprofesional (nombre, resolucion, cantidadhoraminima, funciones) VALUES ('$nombre, $resolucion, $cantidadhoraminima,$funciones')";
    $resultado = $conexiondb->prepare($sql);
    $resultado->execute([$nombre, $apellido, $cantidadhoraminima, $funciones]);

    if (!$resultado) {
        die("Query Failed.");
    }

    $_SESSION['message'] = 'Task Saved Successfully';
    $_SESSION['message_type'] = 'success';
    header('Location: index.php');
}
