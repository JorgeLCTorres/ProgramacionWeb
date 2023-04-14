<?php
// SE INICIA LA SESSION
session_start();
// SE ACTUALIZAN LOS VALORES DE LA SESSION PARA ACTUALIZAR LAS VIEWS
$_SESSION['session']['id_tienda'] = $_GET['id_tienda'];
$_SESSION['session']['tienda'] = $_GET['tienda'];
// REDIRECCIONA A HOME
header("Location:../view/home.php");
?>