<?php
include('../model/db_tienda.php');

// FUNCION QUE RETORNA EL NOMBRE DE LA TIENDA
function nombre_tienda($id_tienda)
{
    // SE LE PASA COMO PARAMETRO LA VARIABLE $id_tienda A LA FUNCIÓN QUE BUSCA EN LA BD
    $tiendas = buscar_tienda($id_tienda);
    //SE RECORRE LA MATRIZ QUE RETORNA LA FUNCIÓN ANTERIOR PARA SOLO RETORNAR EL NOMBRE DE LA TIENDA QUE HAYA COINCIDIDO CON EL ID
    foreach ($tiendas as $fila) {
        return $fila['nombre'];
    }
}

// FUNCION QUE RETORNA EL ESTADO DE LA TIENDA
function estado_tienda($id_tienda)
{
    // SE LE PASA COMO PARAMETRO LA VARIABLE $id_tienda A LA FUNCIÓN QUE BUSCA EN LA BD
    $tiendas = buscar_tienda($id_tienda);
    //SE RECORRE LA MATRIZ QUE RETORNA LA FUNCIÓN ANTERIOR PARA SOLO RETORNAR EL ESTADO DE LA TIENDA QUE HAYA COINCIDIDO CON EL ID
    foreach ($tiendas as $fila) {
        return $fila['estado'];
    }
}
?>