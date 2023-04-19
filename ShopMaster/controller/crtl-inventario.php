<?php
include('../model/db_inventario.php');
// SE INICIA LA SESSION
session_start();
// GUARDA TODA LA TABLA DE PRODUCTOS
$productos = getall_products_store($_SESSION['session']['id_tienda']);
// RECORRE LA INFO DE LA TABLA POR FILAS
foreach ($productos as $fila) {
    // GENERA FILA DE LA DATATABLE IMPRIMIENDO LOS DATOS DE LA FILA ACTUAL
    echo "<tr>";
    echo "<td>" . $fila['codigo'] . "</td>";
    echo "<td>" . $fila['nombre'] . "</td>";
    echo "<td>" . $fila['fecha_registro'] . "</td>";
    echo "<td>" . $fila['precio'] . "</td>";
    echo "<td>" . $fila['nombre_categoria'] . "</td>";
    echo "<td>" . $fila['stock'] . "</td>";
    // BOTONES PARA REALIZAR ACCIONES COMO EDITAR Y BORRAR LA CATEGORIA DE LA FILA ACTUAL
    echo "<td><button onclick=\"location.href='./editar_producto.php?id_producto=" . $fila['id'] . "'\" type='button' class='btn btn-warning rounded-pill m-2'>Editar</button></td>";
    echo "<td><button onClick='confirmar_borrar(" . $fila['id'] . ")' type='button' class='btn btn-danger rounded-pill m-2'>Borrar</button></td>";
    echo "<td><button onclick=\"location.href='./detalle_producto.php?id_producto=" . $fila['id'] . "'\" type='button' class='btn btn-success rounded-pill m-2'>Detalles</button></td>";
    echo "</tr>";
}
?>