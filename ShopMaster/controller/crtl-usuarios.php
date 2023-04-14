<?php
include('../model/db_usuario.php');
// SE INICIA LA SESSION
session_start();
// GUARDA TODA LA TABLA DE USUARIOS
$usuarios = getall_users_store($_SESSION['session']['id_tienda']);
// RECORRE LA INFO DE LA TABLA POR FILAS
foreach ($usuarios as $fila) {
    // GENERA FILA DE LA DATATABLE IMPRIMIENDO LOS DATOS DE LA FILA ACTUAL
    echo "<tr>";
    echo "<td>" . $fila['id'] . "</td>";
    echo "<td>" . $fila['nombre'] . "</td>";
    echo "<td>" . $fila['apellido'] . "</td>";
    echo "<td>" . $fila['username'] . "</td>";
    echo "<td>" . $fila['email'] . "</td>";
    echo "<td>" . $fila['fecha_registro'] . "</td>";
    // BOTONES PARA REALIZAR ACCIONES COMO EDITAR Y BORRAR EL USUARIO DE LA FILA ACTUAL
    echo "<td><button onclick=\"location.href='#'\" type='button' class='btn btn-warning rounded-pill m-2'>Editar</button></td>";
    echo "<td><button onclick=\"location.href='#'\" type='button' class='btn btn-danger rounded-pill m-2'>Borrar</button></td>";
    echo "</tr>";
}
?>