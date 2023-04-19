<?php
include('../model/db_categoria.php');
// SE INICIA LA SESSION
session_start();
// GUARDA TODA LA TABLA DE CATEGORIAS
$categorias = getall_categories_store($_SESSION['session']['id_tienda']);
// RECORRE LA INFO DE LA TABLA POR FILAS
foreach ($categorias as $fila) {
    // GENERA FILA DE LA DATATABLE IMPRIMIENDO LOS DATOS DE LA FILA ACTUAL
    echo "<tr>";
    echo "<td>" . $fila['nombre'] . "</td>";
    echo "<td>" . $fila['descripcion'] . "</td>";
    echo "<td>" . $fila['fecha_registro'] . "</td>";
    // BOTONES PARA REALIZAR ACCIONES COMO EDITAR Y BORRAR LA CATEGORIA DE LA FILA ACTUAL
    echo "<td><button onclick=\"location.href='./editar_categoria.php?id_categoria=" . $fila['id'] . "'\" type='button' class='btn btn-warning rounded-pill m-2'>Editar</button></td>";
    echo "<td><button onclick='confirmar_borrar(" . $fila['id'] . ")' type='button' class='btn btn-danger rounded-pill m-2'>Borrar</button></td>";
    echo "</tr>";
}
?>