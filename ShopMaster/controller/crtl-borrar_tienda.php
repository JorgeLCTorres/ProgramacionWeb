<?php
include('../model/db_tienda.php');
//SE OBTIENE LA VARIABLE QUE SE HA PASADO COMO PARAMETRO POR URL A ESTA PÁGINA
$id_tienda = $_GET['id_tienda'];
$store = delete_store($id_tienda);
//SE REDIRECCIONA AL HOME
header("Location:../view/home.php");
?>