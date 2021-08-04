<?php
include("./mysql/conexion.php");

if (isset($_POST['guardar_alumno'])) {
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $dni = $_POST['dni'];
  $edad = $_POST['edad'];
  $direccion = $_POST['direccion'];
  $telefono = $_POST['telefono'];
  $condicion = $_POST['condicion'];
  $estado = $_POST['estado'];
  $descripcion = $_POST['descripcion'];


  // $sql = "INSERT INTO persona (nombre, apellido, dni,) VALUES (?,?,?)";
  // $resultado= $conexiondb->prepare($sql);
  // $resultado->execute([$name, $surname, $sex]);   
  $sql = "INSERT INTO alumno (condicion, estado,) 
  VALUES ($condicion, $estado,)";
  "INSERT INTO persona (nombre, apellido, dni, edad, direccion, telefono, descripcion) 
  VALUES ($nombre, $apellido, $dni, $edad, $direccion, $telefono, $condicion, $estado, $descripcion)";

  # FROM persona inner join alumno on persona.id = alumno.persona_id';

  foreach ($conexiondb->query($sql) as $row) {
    if (!$sql) {
      die("Query Failed.");
    }

    $_SESSION['message'] = 'Task Saved Successfully';
    $_SESSION['message_type'] = 'success';
    header('Location: index.php');
  }
}
