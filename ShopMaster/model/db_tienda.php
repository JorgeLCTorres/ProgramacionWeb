<?php
// REALIZA LA CONEXION CON LA DB
include('connection.php');

// FUNCION QUE RETORNA UN QUERY QUE BUSCA UNA TIENDA EN BASE AL NOMBRE DE ESTA
function search_store($store_name)
{
    global $pdo;
    // QUERY QUE OBTIENE LOS DATOS DE UNA TIENDA EN BASE A SU NOMBRE
    $sql = "SELECT * FROM tienda WHERE nombre = '$store_name'";
    //SE PREPARA LA SENTENCIA SQL
    $statement = $pdo->prepare($sql);
    //SE EJECUTA LA SENTENCIA SQL
    $statement->execute();
    //SE DEVUELVEN LOS RESULTADOS EN FORMA DE MATRIZ DE OBJETOS
    $results = $statement->fetchAll();
    //SE RETORNA LA MATRIZ DE OBJETOS
    return $results;
}

// FUNCION QUE RETORNA UN QUERY QUE BUSCA UNA TIENDA EN BASE AL ID DE ESTA
function buscar_tienda($store_id)
{
    global $pdo;
    // QUERY QUE OBTIENE LOS DATOS DE UNA TIENDA EN BASE A SU ID
    $sql = "SELECT * FROM tienda WHERE id = '$store_id'";
    //SE PREPARA LA SENTENCIA SQL
    $statement = $pdo->prepare($sql);
    //SE EJECUTA LA SENTENCIA SQL
    $statement->execute();
    //SE DEVUELVEN LOS RESULTADOS EN FORMA DE MATRIZ DE OBJETOS
    $results = $statement->fetchAll();
    //SE RETORNA LA MATRIZ DE OBJETOS
    return $results;
}

// FUNCION QUE RETORNA UN QUERY QUE BUSCA UNA TIENDA EN BASE AL NOMBRE Y ESTADO DE ESTA
function registered_store($store_id, $store_name)
{
    global $pdo;
    // QUERY QUE OBTIENE LOS DATOS DE UNA TIENDA EN BASE A SU NOMBRE Y ESTADO
    $sql = "SELECT * FROM tienda WHERE id = '$store_id' AND nombre = '$store_name'";
    //SE PREPARA LA SENTENCIA SQL
    $statement = $pdo->prepare($sql);
    //SE EJECUTA LA SENTENCIA SQL
    $statement->execute();
    //SE DEVUELVEN LOS RESULTADOS EN FORMA DE MATRIZ DE OBJETOS
    $results = $statement->fetchAll();
    //SE RETORNA LA MATRIZ DE OBJETOS
    return $results;
}


// FUNCION QUE RETORNA UN QUERY QUE INSERTA / REGISTRA UNA TIENDA
function insert_store($store_name, $store_state)
{
    global $pdo;
    // QUERY QUE INSERTA UNA TIENDA NUEVA
    $sql = "INSERT INTO tienda(nombre, estado) VALUES('$store_name', '$store_state')";
    //SE PREPARA LA SENTENCIA SQL
    $statement = $pdo->prepare($sql);
    //SE EJECUTA LA SENTENCIA SQL
    $statement->execute();
    //SE DEVUELVEN LOS RESULTADOS EN FORMA DE MATRIZ DE OBJETOS
    $results = $statement->fetchAll();
    //SE RETORNA LA MATRIZ DE OBJETOS
    return $results;
}

// FUNCION QUE RETORNA UN QUERY DE LAS TIENDAS
function getall_stores()
{
    global $pdo;
    // QUERY QUE OBTIENE LOS DATOS DE TODAS LAS TIENDAS
    $sql = "SELECT * FROM tienda";
    //SE PREPARA LA SENTENCIA SQL
    $statement = $pdo->prepare($sql);
    //SE EJECUTA LA SENTENCIA SQL
    $statement->execute();
    //SE DEVUELVEN LOS RESULTADOS EN FORMA DE MATRIZ DE OBJETOS
    $results = $statement->fetchAll();
    //SE RETORNA LA MATRIZ DE OBJETOS
    return $results;
}

// FUNCION QUE RETORNA UN QUERY QUE BUSCA LOS PRODUCTOS DE UNA TIENDA
function getall_products($store_id)
{
    global $pdo;
    // QUERY QUE OBTIENE LOS PRODUCTOS DE UNA TIENDA EN BASE AL ID DE TIENDA
    $sql = "SELECT * FROM producto WHERE id_tienda = '$store_id'";
    //SE PREPARA LA SENTENCIA SQL
    $statement = $pdo->prepare($sql);
    //SE EJECUTA LA SENTENCIA SQL
    $statement->execute();
    //SE DEVUELVEN LOS RESULTADOS EN FORMA DE MATRIZ DE OBJETOS
    $results = $statement->fetchAll();
    //SE RETORNA LA MATRIZ DE OBJETOS
    return $results;
}

// FUNCION QUE RETORNA UN QUERY QUE BUSCA LOS USUARIOS DE UNA TIENDA
function getall_users($store_id)
{
    global $pdo;
    // QUERY QUE OBTIENE LOS USUARIOS DE UNA TIENDA EN BASE AL ID DE TIENDA
    $sql = "SELECT * FROM usuario WHERE id_tienda = '$store_id'";
    //SE PREPARA LA SENTENCIA SQL
    $statement = $pdo->prepare($sql);
    //SE EJECUTA LA SENTENCIA SQL
    $statement->execute();
    //SE DEVUELVEN LOS RESULTADOS EN FORMA DE MATRIZ DE OBJETOS
    $results = $statement->fetchAll();
    //SE RETORNA LA MATRIZ DE OBJETOS
    return $results;
}

// FUNCION QUE RETORNA UN QUERY QUE BUSCA LAS CATEGORIAS DE UNA TIENDA
function getall_categories($store_id)
{
    global $pdo;
    // QUERY QUE OBTIENE LAS CATEGORIAS DE UNA TIENDA EN BASE AL ID DE TIENDA
    $sql = "SELECT * FROM categoria WHERE id_tienda = '$store_id'";
    //SE PREPARA LA SENTENCIA SQL
    $statement = $pdo->prepare($sql);
    //SE EJECUTA LA SENTENCIA SQL
    $statement->execute();
    //SE DEVUELVEN LOS RESULTADOS EN FORMA DE MATRIZ DE OBJETOS
    $results = $statement->fetchAll();
    //SE RETORNA LA MATRIZ DE OBJETOS
    return $results;
}

// FUNCION QUE RETORNA UN QUERY QUE ACTUALIZA LA INFORMACIÓN DE LA TIENDA EN LA BASE DE DATOS
function update_store($store_id, $store_name, $store_state)
{
    global $pdo;
    // QUERY QUE REALIZA UN UPDATE DE LOS DATOS NOMBRE Y ESTADO DE LA TIENDA
    $sql = "UPDATE tienda SET nombre = '$store_name', estado = '$store_state' WHERE id = '$store_id'";
    //SE PREPARA LA SENTENCIA SQL
    $statement = $pdo->prepare($sql);
    //SE EJECUTA LA SENTENCIA SQL
    $statement->execute();
    //SE DEVUELVEN LOS RESULTADOS EN FORMA DE MATRIZ DE OBJETOS
    $results = $statement->fetchAll();
    //SE RETORNA LA MATRIZ DE OBJETOS
    return $results;
}

// FUNCION QUE RETORNA UN QUERY QUE ELIMINA UN REGISTRO DE TIENDA EN LA BASE DE DATOS
function delete_store($store_id)
{
    global $pdo;
    // QUERY QUE REALIZA UN DELETE DE UN REGISTRO EN LA TABLA TIENDA
    $sql = "DELETE FROM tienda WHERE id = '$store_id'";
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