<?php
//////////////////////////CONEXIÓN A LA BD SERVER//////////////////////////
//SE DECLARAN LOS DATOS NECESARIOS PARA REALIZAR LA CONEXIÓN A LA BD SERVER
$db_host = 'localhost';
$db_name = 'shopmaster';
$db_user = 'debian-sys-maint';
$db_pass = '5a3c5a57843d4321c78071733de4b9494a1db0c99794928f';
$dsn = "mysql:host=$db_host;dbname=$db_name";

//SE INTENTA REALIZAR LA CONEXIÓN A LA BD MEDIANTE LA CLASE PDO
try {
    $pdo = new PDO($dsn, $db_user, $db_pass);
} catch (PDOException $e) {
//SI NO SE REALIZA LA CONEXIÓN, SE MUESTRA UN MENSAJE DE ERROR
    echo 'Error al conectarse a la base de datos: ' . $e->getMessage();
}
?>