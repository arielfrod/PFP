
<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "pfpdb";

$conexion = mysqli_connect($server, $user, $password, $database);

// try {
//     $conexiondb = new PDO(
//         "mysql:host=$server;dbname=$database",
//         $user,
//         $password
//     );
//     $conexiondb->setAttribute(
//         PDO::ATTR_ERRMODE,
//         PDO::ERRMODE_EXCEPTION
//     );
// } catch (PDOException $error) {
//     var_dump("error de coneccion. ", $error->getMessage());
// }


?>