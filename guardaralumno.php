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
  /// inserar persona
  $sql = "INSERT INTO persona (nombre, apellido,  edad,  direccion, telefono, dni) VALUES('$nombre','$apellido','$edad','$direccion','$telefono','$dni')";
  $query = mysqli_query($conexion, $sql);
  var_dump($query);
  /// obtner el ultimo registro inserado en la tabla persona
  $sql1 = 'SELECT * FROM persona ORDER BY id ASC';
  $resultado = mysqli_query($conexion, $sql);
  $row = mysqli_fetch_assoc($resultado);
  $cont = count($row);
  /// guardar en una variable el id de persona
  $row[$cont - 1];



  /// insertar alumno



  // $sql1 = "INSERT INTO persona ( nombre, apellido,  edad,  direccion, telefono, dni, descripcion)";
  // $query = $conexiondb->prepare($sql1);

  // $query->bindParam(':nombre', $nombre);
  // $query->bindParam(':apellido', $apellido);
  // $query->bindParam(':edad', $edad);
  // $query->bindParam(':direccion', $direccion);
  // $query->bindParam(':telefono', $telefono);
  // $query->bindParam(':dni', $dni);
  // $query->bindParam(':descripcion', $descripcion);

  // if ($query->execute()) {
  //   $idpersona = $conexiondb->lastInsertId();
  //   $sql2 = "INSERT INTO alumno (persona_id, condicion, estado)";
  //   $query = $conexiondb->prepare($sql2);
  //   $query->bindParam(':persona_id', $idpersona);
  //   $query->bindParam(':estado', $estado);
  //   $query->bindParam(':condicion', $condicion);
  //   $query->execute();
  //   $idalumno = $conexiondb->lastInsertId();
  //   $_SESSION['message'] = 'Task Saved Successfully';
  //   $_SESSION['message_type'] = 'success';
  // } else {
  //   $_SESSION['message'] = 'No se pudeo Realizar La carga del ALumno';
  //$_SESSION['message_type'] = $query;
  // }








  // if ($idpersona == 0) {

  // } else {
  //   // este insert se realiza despues de crear la persona

  //   if ($idalumno == 0) {
  //     echo "error en la carga";
  //   } else {
  //     echo "alumno creado exitosamente";
  //   }
  // }




  // foreach ($conexiondb->query($sql) as $row) {
  //   if (!$sql) {
  //     die("Query Failed.");
  //   }


  //header('Location: index.php');
  // }
}
