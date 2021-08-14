
<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "pfpdb";


try {
    $conexiondb = new PDO(
        "mysql:host=$server;dbname=$database",
        $user,
        $password
    );
    $conexiondb->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );
<<<<<<< HEAD
=======


    // $id = 2;
    // $respuesta = $conexiondb->prepare("SELECT * FROM persona where id=?  LIMIT 2");
    // $respuesta->execute(array($id));
    // $datos = $respuesta->fetchAll();

    #El metodo errorInfo( ) captura el mensaje de error de la ultima consulta ejecutada en el servidor... siempre devuelve un array con 3 elementos, si no hay error, el primer elemento es el string 00000
    #var_dump($cnx->errorInfo( ) );
    // var_dump($respuesta);
    // foreach ($datos as $r) {
    //     var_dump($r);
    // }
    //////////


    //code...
>>>>>>> e2e66e91cda67e1724a2413e5e9545875c2106e5
} catch (PDOException $error) {
    var_dump("error de coneccion. ", $error->getMessage());
}


?>