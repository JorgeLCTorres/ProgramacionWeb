<?php
include('../model/db_usuario.php');
//SE OBTIENE LA VARIABLE QUE SE HA PASADO COMO PARAMETRO POR URL A ESTA PÁGINA
$id_usuario = $_GET['id_usuario'];
//SE MANDA LLAMAR LA FUNCIÓN QUE ELIMINA EL USUARIO DE LA BASE DE DATOS
$usuario = delete_user($id_usuario);
?>