<?php
// REALIZA LA CONEXION CON LA DB
include('connection.php');

// FUNCION QUE RETORNA LAS CATEGORIAS DE UNA TIENDA
function getall_categories_store($id_tienda)
{
    global $pdo;
    // QUERY QUE OBTIENE TODOS LOS CAMPOS DE UN REGISTRO DONDE COINCIDA EL id_tienda
    $sql = "SELECT * FROM categoria WHERE id_tienda = '$id_tienda'";
    //SE PREPARA LA SENTENCIA SQL
    $statement = $pdo->prepare($sql);
    //SE EJECUTA LA SENTENCIA SQL
    $statement->execute();
    //SE DEVUELVEN LOS RESULTADOS EN FORMA DE MATRIZ DE OBJETOS
    $results = $statement->fetchAll();
    //SE RETORNA LA MATRIZ DE OBJETOS
    return $results;
}

// FUNCION QUE RETORNA UN QUERY QUE BUSCA UNA CATEGORÍA EN BASE AL ID DE ESTA
function search_category($id_categoria)
{
    global $pdo;
    // QUERY QUE OBTIENE LOS DATOS DE UNA CATEGORÍA EN BASE A SU ID
    $sql = "SELECT * FROM categoria WHERE id = '$id_categoria'";
    //SE PREPARA LA SENTENCIA SQL
    $statement = $pdo->prepare($sql);
    //SE EJECUTA LA SENTENCIA SQL
    $statement->execute();
    //SE DEVUELVEN LOS RESULTADOS EN FORMA DE MATRIZ DE OBJETOS
    $results = $statement->fetchAll();
    //SE RETORNA LA MATRIZ DE OBJETOS
    return $results;
}

function buscar_categoria($nombre, $id_tienda)
{
    global $pdo;
    // QUERY QUE OBTIENE LOS DATOS DE UNA TIENDA EN BASE A SU NOMBRE
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

// FUNCION QUE RETORNA UN QUERY QUE ACTUALIZA LA INFORMACIÓN DE LA CATEGORÍA EN LA BASE DE DATOS
function update_category($id_categoria, $nombre, $descripcion)
{
    global $pdo;
    // QUERY QUE REALIZA UN UPDATE DE LOS DATOS NOMBRE Y DESCRIPCIÓN DE LA CATEGORÍA
    $sql = "UPDATE categoria SET nombre = '$nombre', descripcion = '$descripcion' WHERE id = '$id_categoria'";
    //SE PREPARA LA SENTENCIA SQL
    $statement = $pdo->prepare($sql);
    //SE EJECUTA LA SENTENCIA SQL
    $statement->execute();
    //SE DEVUELVEN LOS RESULTADOS EN FORMA DE MATRIZ DE OBJETOS
    $results = $statement->fetchAll();
    //SE RETORNA LA MATRIZ DE OBJETOS
    return $results;
}

// FUNCION QUE RETORNA UN QUERY QUE ELIMINA UN REGISTRO DE CATEGORÍA EN LA BASE DE DATOS
function delete_category($id_categoria)
{
    global $pdo;
    // QUERY QUE REALIZA UN DELETE DE UN REGISTRO EN LA TABLA TIENDA
    $sql = "DELETE FROM categoria WHERE id = '$id_categoria'";
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