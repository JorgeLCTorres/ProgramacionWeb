<?php
// REALIZA LA CONEXION CON LA DB
include('connection.php');

// FUNCION QUE RETORNA LAS CATEGORIAS DE UNA TIENDA
function getall_categories_store($id_tienda)
{
    global $pdo;
    // QUERY QUE OBTIENE UN JOIN ENTRE LA TABLA DE CATEGORIAS Y TIENDAS
    /*
    $sql = "SELECT u.*
    FROM usuario AS u
    JOIN tienda AS t ON u.id_tienda = t.id
    WHERE u.id_tienda = '$id_tienda'";
    */
    $sql = "SELECT c.*
            FROM categoria AS c
            JOIN tienda AS t ON c.id_tienda = t.id
            WHERE c.id_tienda = '$id_tienda'";
    //SE PREPARA LA SENTENCIA SQL
    $statement = $pdo->prepare($sql);
    //SE EJECUTA LA SENTENCIA SQL
    $statement->execute();
    //SE DEVUELVEN LOS RESULTADOS EN FORMA DE MATRIZ DE OBJETOS
    $results = $statement->fetchAll();
    //SE RETORNA LA MATRIZ DE OBJETOS
    return $results;
}

//FUNCIÓN QUE RETORNA LA FILA DONDE SE ENCUENTRE LA COINCIDENCIA DE LA SENTENCIA SQL Y SI NO, ENTONCES RETORNA FALSE
function search_category_to_register($nombre, $id_tienda)
{
    global $pdo;
    // QUERY QUE OBTIENE LAS CATEGORIAS QUE COINCIDAN CON EL NOMBRE Y ID DE TIENDA RECIBIDO COMO PARÁMETRO
    $sql = "SELECT * FROM categoria WHERE nombre = '$nombre' AND id_tienda = '$id_tienda'";
    //SE PREPARA LA SENTENCIA SQL
    $statement = $pdo->prepare($sql);
    //SE EJECUTA LA SENTENCIA SQL
    $statement->execute();
    //SE DEVUELVEN LOS RESULTADOS EN FORMA DE MATRIZ DE OBJETOS
    $results = $statement->fetchAll();
    //SE RETORNA LA MATRIZ DE OBJETOS
    return $results;
}

// FUNCION QUE RETORNA UN QUERY QUE INSERTA / REGISTRA UNA CATEGORÍA
function insert_category($nombre, $descripcion, $id_tienda)
{
    global $pdo;
    $fecha = date('Y-m-d h:m:s');
    // QUERY QUE INSERTA UN USUARIO NUEVO
    $sql = "INSERT INTO categoria(nombre, descripcion, fecha_registro, id_tienda) VALUES('$nombre', '$descripcion', '$fecha', '$id_tienda')";
    //SE PREPARA LA SENTENCIA SQL
    $statement = $pdo->prepare($sql);
    //SE EJECUTA LA SENTENCIA SQL
    $statement->execute();
    //SE DEVUELVEN LOS RESULTADOS EN FORMA DE MATRIZ DE OBJETOS
    $results = $statement->fetchAll();
    //SE RETORNA LA MATRIZ DE OBJETOS
    return $results;
}
?>