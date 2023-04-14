<?php
// SE INICIA LA SESSION
session_start();
// SE ACUALIZAN LAS VARIABLES DE LA SESSION PARA root
$_SESSION['session']['id_tienda'] = 1;
$_SESSION['session']['tienda'] = 'root';
// REDIRECCIONA A HOME
header("Location:../view/home.php");
?>