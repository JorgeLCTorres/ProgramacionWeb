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
?>