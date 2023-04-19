<?php
include('../model/db_usuario.php');

// FUNCION QUE RETORNA EL NOMBRE DEL USUARIO
function nombre_usuario($id_usuario)
{
    // SE LE PASA COMO PARAMETRO LA VARIABLE $id_usuario A LA FUNCIÓN QUE BUSCA EN LA BD
    $usuario = get_user_by_id($id_usuario);
    //SE RECORRE LA MATRIZ QUE RETORNA LA FUNCIÓN ANTERIOR PARA SOLO RETORNAR EL NOMBRE DEL USUARIO QUE HAYA COINCIDIDO CON EL ID
    foreach ($usuario as $fila) {
        return $fila['nombre'];
    }
}

// FUNCION QUE RETORNA EL APELLIDO DEL USUARIO
function apellido_usuario($id_usuario)
{
    // SE LE PASA COMO PARAMETRO LA VARIABLE $id_usuario A LA FUNCIÓN QUE BUSCA EN LA BD
    $usuario = get_user_by_id($id_usuario);
    //SE RECORRE LA MATRIZ QUE RETORNA LA FUNCIÓN ANTERIOR PARA SOLO RETORNAR EL APELLIDO DEL USUARIO QUE HAYA COINCIDIDO CON EL ID
    foreach ($usuario as $fila) {
        return $fila['apellido'];
    }
}

// FUNCION QUE RETORNA EL USERNAME DEL USUARIO
function username_usuario($id_usuario)
{
    // SE LE PASA COMO PARAMETRO LA VARIABLE $id_usuario A LA FUNCIÓN QUE BUSCA EN LA BD
    $usuario = get_user_by_id($id_usuario);
    //SE RECORRE LA MATRIZ QUE RETORNA LA FUNCIÓN ANTERIOR PARA SOLO RETORNAR EL USERNAME DEL USUARIO QUE HAYA COINCIDIDO CON EL ID
    foreach ($usuario as $fila) {
        return $fila['username'];
    }
}

// FUNCION QUE RETORNA EL EMAIL DEL USUARIO
function email_usuario($id_usuario)
{
    // SE LE PASA COMO PARAMETRO LA VARIABLE $id_usuario A LA FUNCIÓN QUE BUSCA EN LA BD
    $usuario = get_user_by_id($id_usuario);
    //SE RECORRE LA MATRIZ QUE RETORNA LA FUNCIÓN ANTERIOR PARA SOLO RETORNAR EL EMAIL DEL USUARIO QUE HAYA COINCIDIDO CON EL ID
    foreach ($usuario as $fila) {
        return $fila['email'];
    }
}

// FUNCION QUE RETORNA EL PASSWORD DEL USUARIO
function password_usuario($id_usuario)
{
    // SE LE PASA COMO PARAMETRO LA VARIABLE $id_usuario A LA FUNCIÓN QUE BUSCA EN LA BD
    $usuario = get_user_by_id($id_usuario);
    //SE RECORRE LA MATRIZ QUE RETORNA LA FUNCIÓN ANTERIOR PARA SOLO RETORNAR EL PASSWORD DEL USUARIO QUE HAYA COINCIDIDO CON EL ID
    foreach ($usuario as $fila) {
        return $fila['password'];
    }
}
?>