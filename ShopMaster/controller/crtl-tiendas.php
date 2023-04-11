<?php
include('../model/db_tienda.php');

$tiendas = getall_stores();

foreach ($tiendas as $fila) {
    echo "<tr>";
    echo "<td>".$fila['id']."</td>";
    echo "<td>".$fila['nombre']."</td>";
    if ($fila['estado'] == 1) {
        echo "<td>Activa</td>";
    } else {
        echo "<td>Inactiva</td>";
    }
    echo "<td><button type='button' class='btn btn-warning rounded-pill m-2'>Editar</button></td>";
    echo "<td><button type='button' class='btn btn-danger rounded-pill m-2'>Borrar</button></td>";
    echo "<td><button type='button' class='btn btn-success rounded-pill m-2'>Ingresar</button></td>";
    echo "</tr>";
}
?>