<?php
// REALIZA LA CONEXION CON LA DB
include('connection.php');

//FUNCIÓN QUE RETORNA LA FILA DONDE SE ENCUENTRE LA COINCIDENCIA DE LA SENTENCIA SQL Y SI NO, ENTONCES RETORNA FALSE
function search_user($username, $password)
{
    global $pdo;
    // QUERY QUE OBTIENE UN JOIN ENTRE LA TABLA DE USUARIOS Y TIENDAS, ADEMAS DE QUE COINCIDA CON LAS CREDENCIALES PROPORCIONADAS
    $sql = "SELECT usuario.id, usuario.tipo, usuario.username, usuario.id_tienda, tienda.nombre, tienda.estado FROM usuario INNER JOIN tienda ON usuario.id_tienda = tienda.id WHERE usuario.password = '$password' AND usuario.username = '$username'";
    //SE PREPARA LA SENTENCIA SQL
    $statement = $pdo->prepare($sql);
    //SE EJECUTA LA SENTENCIA SQL
    $statement->execute();
    //SE DEVUELVEN LOS RESULTADOS EN FORMA DE MATRIZ DE OBJETOS
    $results = $statement->fetchAll();
    //SE RETORNA LA MATRIZ DE OBJETOS
    return $results;
}

// FUNCION QUE RETORNA LOS USUARIOS DE UNA TIENDA
function getall_users_store($id_tienda)
{
    global $pdo;
    // QUERY QUE OBTIENE UN JOIN ENTRE LA TABLA DE USUARIOS Y TIENDAS
    $sql = "SELECT u.*
            FROM usuario AS u
            JOIN tienda AS t ON u.id_tienda = t.id
            WHERE u.id_tienda = '$id_tienda'";
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
function search_user_to_register($username)
{
    global $pdo;
    // QUERY QUE OBTIENE LOS REGISTROS DE USUARIOS QUE COINCIDAN CON EL USERNAME RECIBIDO COMO PARÁMETRO
    $sql = "SELECT * FROM usuario WHERE username = '$username'";
    //SE PREPARA LA SENTENCIA SQL
    $statement = $pdo->prepare($sql);
    //SE EJECUTA LA SENTENCIA SQL
    $statement->execute();
    //SE DEVUELVEN LOS RESULTADOS EN FORMA DE MATRIZ DE OBJETOS
    $results = $statement->fetchAll();
    //SE RETORNA LA MATRIZ DE OBJETOS
    return $results;
}

// FUNCION QUE RETORNA UN QUERY QUE INSERTA / REGISTRA UN USUARIO
function insert_user($nombre, $apellido, $username, $email, $password, $id_tienda)
{
    global $pdo;
    $fecha = date('Y-m-d h:m:s');
    // QUERY QUE INSERTA UN USUARIO NUEVO
    $sql = "INSERT INTO usuario(nombre, apellido, username, email, password, fecha_registro, id_tienda) VALUES('$nombre', '$apellido', '$username', '$email', '$password', '$fecha', '$id_tienda')";
    //SE PREPARA LA SENTENCIA SQL
    $statement = $pdo->prepare($sql);
    //SE EJECUTA LA SENTENCIA SQL
    $statement->execute();
    //SE DEVUELVEN LOS RESULTADOS EN FORMA DE MATRIZ DE OBJETOS
    $results = $statement->fetchAll();
    //SE RETORNA LA MATRIZ DE OBJETOS
    return $results;
}


function get_user_by_id($id_user)
{
    global $pdo;
    // QUERY QUE OBTIENE LOS REGISTROS DE USUARIOS QUE COINCIDAN CON EL ID RECIBIDO COMO PARÁMETRO
    $sql = "SELECT * FROM usuario WHERE id = '$id_user'";
    //SE PREPARA LA SENTENCIA SQL
    $statement = $pdo->prepare($sql);
    //SE EJECUTA LA SENTENCIA SQL
    $statement->execute();
    //SE DEVUELVEN LOS RESULTADOS EN FORMA DE MATRIZ DE OBJETOS
    $results = $statement->fetchAll();
    //SE RETORNA LA MATRIZ DE OBJETOS
    return $results;
}

function delete_user($id_usuario)
{
    global $pdo;
    // QUERY QUE REALIZA UN DELETE DE UN REGISTRO EN LA TABLA USUARIO
    $sql = "DELETE FROM usuario WHERE id = '$id_usuario'";
    //SE PREPARA LA SENTENCIA SQL
    $statement = $pdo->prepare($sql);
    //SE EJECUTA LA SENTENCIA SQL
    $statement->execute();
    //SE DEVUELVEN LOS RESULTADOS EN FORMA DE MATRIZ DE OBJETOS
    $results = $statement->fetchAll();
    //SE RETORNA LA MATRIZ DE OBJETOS
    return $results;
}

// FUNCION QUE RETORNA UN QUERY QUE ACTUALIZA LA INFORMACIÓN DEL USUARIO EN LA BASE DE DATOS
function update_user($id_usuario, $nombre, $apellido, $username, $email, $password)
{
    global $pdo;
    // QUERY QUE REALIZA UN UPDATE DE LOS DATOS NOMBRE Y DESCRIPCIÓN DE LA CATEGORÍA
    $sql = "UPDATE usuario 
            SET nombre = '$nombre', apellido = '$apellido', username = '$username', email = '$email', password = '$password'
            WHERE id = '$id_usuario'";
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