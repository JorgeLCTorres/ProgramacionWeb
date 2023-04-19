<?php
// REALIZA LA CONEXION CON LA DB
include('connection.php');

// FUNCION QUE RETORNA TODOS LOS PRODUCTOS DE UNA TIENDA
function getall_products_store($id_tienda)
{
    global $pdo;
    // QUERY QUE OBTIENE TODOS LOS CAMPOS DE LA TABLA producto DE UN REGISTRO DONDE COINCIDA EL id_tienda Y SE REALIZA UN JOIN PARA OBTENER EL NOMBRE DE LA CATEGORÍA (NO SOLO EL ID)
    $sql = "SELECT p.*, c.nombre AS nombre_categoria
            FROM producto AS p 
            JOIN categoria AS c ON c.id = p.id_categoria
            WHERE p.id_tienda = '$id_tienda'";
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
function search_product_to_register($codigo, $id_tienda)
{
    global $pdo;
    // QUERY QUE OBTIENE LOS PRODUCTOS QUE COINCIDAN CON EL CÓDIGO Y ID DE TIENDA RECIBIDO COMO PARÁMETRO
    $sql = "SELECT * FROM producto WHERE codigo = '$codigo' AND id_tienda = '$id_tienda'";
    //SE PREPARA LA SENTENCIA SQL
    $statement = $pdo->prepare($sql);
    //SE EJECUTA LA SENTENCIA SQL
    $statement->execute();
    //SE DEVUELVEN LOS RESULTADOS EN FORMA DE MATRIZ DE OBJETOS
    $results = $statement->fetchAll();
    //SE RETORNA LA MATRIZ DE OBJETOS
    return $results;
}

// FUNCION QUE RETORNA UN QUERY QUE INSERTA / REGISTRA UN PRODUCTO
function insert_product($codigo, $nombre, $precio, $stock, $categoria, $id_tienda)
{
    global $pdo;
    $fecha = date('Y-m-d h:m:s');
    // QUERY QUE INSERTA UN PRODUCTO NUEVO
    $sql = "INSERT INTO producto(codigo, nombre, precio, stock, fecha_registro, id_categoria, id_tienda) VALUES('$codigo', '$nombre', '$precio', '$stock', '$fecha', '$categoria', '$id_tienda')";
    //SE PREPARA LA SENTENCIA SQL
    $statement = $pdo->prepare($sql);
    //SE EJECUTA LA SENTENCIA SQL
    $statement->execute();
    //SE DEVUELVEN LOS RESULTADOS EN FORMA DE MATRIZ DE OBJETOS
    $results = $statement->fetchAll();
    //SE RETORNA LA MATRIZ DE OBJETOS
    return $results;
}

// FUNCION QUE RETORNA UN QUERY QUE ACTUALIZA LA INFORMACIÓN DEL PRODUCTO EN LA BASE DE DATOS
function update_product($id_producto, $codigo, $nombre, $precio, $stock, $categoria)
{
    global $pdo;
    // QUERY QUE REALIZA UN UPDATE DE LOS DATOS NOMBRE Y DESCRIPCIÓN DEL PRODUCTO
    $sql = "UPDATE producto
            SET codigo = '$codigo', nombre = '$nombre', precio = '$precio', stock = '$stock', id_categoria = '$categoria'
            WHERE id = '$id_producto'";
    //SE PREPARA LA SENTENCIA SQL
    $statement = $pdo->prepare($sql);
    //SE EJECUTA LA SENTENCIA SQL
    $statement->execute();
    //SE DEVUELVEN LOS RESULTADOS EN FORMA DE MATRIZ DE OBJETOS
    $results = $statement->fetchAll();
    //SE RETORNA LA MATRIZ DE OBJETOS
    return $results;
}

// FUNCION QUE RETORNA UN QUERY QUE ELIMINA UN REGISTRO DE PRODUCTO EN LA BASE DE DATOS
function delete_product($id_producto)
{
    global $pdo;
    // QUERY QUE REALIZA UN DELETE DE UN REGISTRO EN LA TABLA PRODUCTO
    $sql = "DELETE FROM producto WHERE id = '$id_producto'";
    //SE PREPARA LA SENTENCIA SQL
    $statement = $pdo->prepare($sql);
    //SE EJECUTA LA SENTENCIA SQL
    $statement->execute();
    //SE DEVUELVEN LOS RESULTADOS EN FORMA DE MATRIZ DE OBJETOS
    $results = $statement->fetchAll();
    //SE RETORNA LA MATRIZ DE OBJETOS
    return $results;
}

function get_product_by_id($id_producto)
{
    global $pdo;
    // QUERY QUE REALIZA UN DELETE DE UN REGISTRO EN LA TABLA PRODUCTO
    $sql = "SELECT * FROM producto WHERE id = '$id_producto'";
    //SE PREPARA LA SENTENCIA SQL
    $statement = $pdo->prepare($sql);
    //SE EJECUTA LA SENTENCIA SQL
    $statement->execute();
    //SE DEVUELVEN LOS RESULTADOS EN FORMA DE MATRIZ DE OBJETOS
    $results = $statement->fetchAll();
    //SE RETORNA LA MATRIZ DE OBJETOS
    return $results;
}

function get_category_name($id_producto, $id_tienda)
{
    global $pdo;
    // QUERY QUE REALIZA UN DELETE DE UN REGISTRO EN LA TABLA PRODUCTO
    $sql = "SELECT p.*, c.nombre AS nombre_categoria 
            FROM producto AS p
            JOIN categoria AS c ON c.id = p.id_categoria
            WHERE p.id_tienda = '$id_tienda' AND p.id = '$id_producto'" ;
    //SE PREPARA LA SENTENCIA SQL
    $statement = $pdo->prepare($sql);
    //SE EJECUTA LA SENTENCIA SQL
    $statement->execute();
    //SE DEVUELVEN LOS RESULTADOS EN FORMA DE MATRIZ DE OBJETOS
    $results = $statement->fetchAll();
    //SE RETORNA LA MATRIZ DE OBJETOS
    return $results;
}

// FUNCION QUE RETORNA UN QUERY QUE ACTUALIZA LA INFORMACIÓN DEL STOCK EN LA BASE DE DATOS
function update_stock($id_producto, $suma)
{
    global $pdo;
    // QUERY QUE REALIZA UN UPDATE DE LOS DATOS DE STOCK DEL PRODUCTO
    $sql = "UPDATE producto
            SET stock = '$suma'
            WHERE id = '$id_producto'";
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
