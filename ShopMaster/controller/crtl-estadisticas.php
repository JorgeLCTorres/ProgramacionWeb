<?php
include('../model/db_tienda.php');
// SE INICIA LA SESSION
session_start();

// FUNCION QUE RETORNA LA CANTIDAD DE PRODUCTOS DE TIENDA
function total_productos()
{
    $productos = getall_products($_SESSION['session']['id_tienda']);
    return count($productos);
}

// FUNCION QUE RETORNA LA CANTIDAD DE USUARIOS DE TIENDA
function total_usuarios()
{
    $usuarios = getall_users($_SESSION['session']['id_tienda']);

    return count($usuarios);
}

// FUNCION QUE RETORNA LA CANTIDAD DE CATEGORIAS DE TIENDA
function total_categorias()
{
    $categorias = getall_categories($_SESSION['session']['id_tienda']);

    return count($categorias);
}
?>