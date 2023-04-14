<?php
// SE INICIA LA SESSION
session_start();
// SE DESTRUYE LA SESSION
session_destroy();
// REDIRECCIONA AL ROOT DEL SITIO (LOGIN)
header("Location:../");
?>