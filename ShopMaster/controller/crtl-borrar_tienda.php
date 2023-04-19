<?php
include('../model/db_tienda.php');
//SE OBTIENE LA VARIABLE QUE SE HA PASADO COMO PARAMETRO POR URL A ESTA PÁGINA
$id_tienda = $_GET['id_tienda'];
//SE MANDA LLAMAR LA FUNCIÓN QUE ELIMINA LA TIENDA DE LA BASE DE DATOS
$store = delete_store($id_tienda);
?>