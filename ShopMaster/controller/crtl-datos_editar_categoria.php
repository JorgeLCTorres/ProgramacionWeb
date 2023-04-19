<?php
include('../model/db_categoria.php');

// FUNCION QUE RETORNA EL NOMBRE DE LA CATEGORÍA
function nombre_categoria($id_categoria)
{
    // SE LE PASA COMO PARAMETRO LA VARIABLE $id_categoria A LA FUNCIÓN QUE BUSCA EN LA BD
    $categoria = search_category($id_categoria);
    //SE RECORRE LA MATRIZ QUE RETORNA LA FUNCIÓN ANTERIOR PARA SOLO RETORNAR EL NOMBRE DE LA CATEGORÍA QUE HAYA COINCIDIDO CON EL ID
    foreach ($categoria as $fila) {
        return $fila['nombre'];
    }
}

// FUNCION QUE RETORNA LA DESCRIPCIÓN DE LA CATEGORÍA
function descripcion_categoria($id_categoria)
{
    // SE LE PASA COMO PARAMETRO LA VARIABLE $id_categoria A LA FUNCIÓN QUE BUSCA EN LA BD
    $categoria = search_category($id_categoria);
    //SE RECORRE LA MATRIZ QUE RETORNA LA FUNCIÓN ANTERIOR PARA SOLO RETORNAR LA DESCRIPCIÓN DE LA CATEGORÍA QUE HAYA COINCIDIDO CON EL ID
    foreach ($categoria as $fila) {
        return $fila['descripcion'];
    }
}
?>