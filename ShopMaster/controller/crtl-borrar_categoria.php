<?php
include('../model/db_categoria.php');
//SE OBTIENE LA VARIABLE QUE SE HA PASADO COMO PARAMETRO POR URL A ESTA PÁGINA
$id_categoria = $_GET['id_categoria'];
//SE MANDA LLAMAR LA FUNCIÓN QUE ELIMINA LA CATEGORÍA DE LA BASE DE DATOS
$categoria = delete_category($id_categoria);
?>