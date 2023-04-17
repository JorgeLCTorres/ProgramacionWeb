<?php
include('../model/db_tienda.php');
// GUARDA TODA LA TABLA DE TIENDAS
$tiendas = getall_stores();
// RECORRE LA INFO DE LA TABLA POR FILAS
foreach ($tiendas as $fila) {
    // SE CONDICIONA PARA NO MOSTRAR LA TIENDA root
    if ($fila['id'] != 1) {
        // GENERA FILA DE LA DATATABLE IMPRIMIENDO LOS DATOS DE LA FILA ACTUAL
        echo "<tr>";
        echo "<td>" . $fila['id'] . "</td>";
        echo "<td>" . $fila['nombre'] . "</td>";
        // SE CONDICIONA PARA MOSTRAR SI ESTA ACTIVA O INACTIVA CON EL VALOR DE ESTADO
        if ($fila['estado'] == 1) {
            echo "<td><a class='activa'>Activa</a></td>";
        } else {
            echo "<td><a class='inactiva'>Inactiva</a></td>";
        }
        // BOTONES PARA REALIZAR ACCIONES COMO EDITAR, BORRAR E INGRESAR A LA TIENDA DE LA FILA ACTUAL
        echo "<td><button onclick=\"location.href='./editar_tienda.php?id_tienda=" . $fila['id'] . "'\" type='button' class='btn btn-warning rounded-pill m-2'>Editar</button></td>";
        echo "<td><button onClick='confirmar_borrar(" . $fila['id'] . ")' type='button' class='btn btn-danger rounded-pill m-2'>Borrar</button></td>";
        echo "<td><button onclick=\"location.href='../controller/change-store.php?tienda=" . $fila['nombre'] . "&id_tienda=" . $fila['id'] . "'\" type='button' class='btn btn-success rounded-pill m-2'>Ingresar</button></td>";
        echo "</tr>";
    }
}
?>