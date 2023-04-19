<?php
include('../model/db_inventario.php');
//SE OBTIENE LA VARIABLE QUE SE HA PASADO COMO PARAMETRO POR URL A ESTA PÁGINA
$id_producto = $_GET['id_producto'];
//SE MANDA LLAMAR LA FUNCIÓN QUE ELIMINA LA CATEGORÍA DE LA BASE DE DATOS
$producto = delete_product($id_producto);
?>