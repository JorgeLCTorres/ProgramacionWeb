<?php
include('connection.php');

//FUNCIÓN QUE RETORNA LA FILA DONDE SE ENCUENTRE LA COINCIDENCIA DE LA SENTENCIA SQL Y SI NO, ENTONCES RETORNA FALSE
function search_user($username, $password)
{
    global $pdo;
    $sql = "SELECT usuario.id, usuario.tipo, usuario.username, tienda.nombre FROM usuario INNER JOIN tienda ON usuario.id_tienda = tienda.id WHERE usuario.password = '$password' AND usuario.username = '$username'";

    //SE PREPARA LA SENTENCIA SQL
    $statement = $pdo->prepare($sql);
    //SE EJECUTA LA SENTENCIA SQL
    $statement->execute();
    //SE DEVUELVEN LOS RESULTADOS EN FORMA DE MATRIZ DE OBJETOS
    $results = $statement->fetchAll();
    //SE RETORNA LA MATRIZ DE OBJETOS
    return $results;
}

/*
function search_store($id)
{
    global $pdo;
    //SE CREA LA SENTENCIA SQL
    $sql = "SELECT usuario.id,  FROM usuario WHERE username='$username' AND password='$password'";
    $sql = "SELECT productos.id, productos.codigo, productos.nombre, productos.descripcion, productos.precio_venta, productos.precio_compra, categorias.nombre AS categoria FROM productos INNER JOIN categorias ON productos.categoria=categorias.id";
    
    //SE PREPARA LA SENTENCIA SQL
    $statement = $pdo->prepare($sql);
    //SE EJECUTA LA SENTENCIA SQL
    $statement->execute();
    //SE DEVUELVEN LOS RESULTADOS EN FORMA DE MATRIZ DE OBJETOS
    $results = $statement->fetchAll();
    //SE RETORNA LA MATRIZ DE OBJETOS
    return $results;
}
*/

function search($username)
{
    global $pdo;

    $sql = "SELECT * FROM usuario WHERE username='$username'";
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $results = $statement->fetchAll();

    return $results;
}

?>