<?php
include('../model/db_inventario.php');
$tipo = $_POST['tipo'];
$stock = $_POST['stock'];
$id_producto = $_POST['id_producto'];

if ($tipo == 1) {
    if (isset($_POST['referencia']) && isset($_POST['unidades'])) {
        // GUARDA LOS VALORES EN VARIABLES LOCALES
        $referencia = $_POST['referencia'];
        $unidades = $_POST['unidades'];
        $suma = intval($unidades) + intval($stock);

        $result = update_stock($id_producto, $suma);
        // CONDICION PARA SABER SI LA INSERCION FUE EXITOSA
        if (!$result) {
            $result['status'] = 1;
            echo json_encode($result);
        } else {
            echo json_encode(array('status' => 0));
        }
    }
} elseif ($tipo == 2) {
    if (isset($_POST['referencia']) && isset($_POST['unidades'])) {
        // GUARDA LOS VALORES EN VARIABLES LOCALES
        $referencia = $_POST['referencia'];
        $unidades = $_POST['unidades'];
        $resta = intval($stock) - intval($unidades);

        if ($resta < 0) {
            echo json_encode(array('status' => -1));
        } else {
            $result = update_stock($id_producto, $resta);
            // CONDICION PARA SABER SI LA INSERCION FUE EXITOSA
            if (!$result) {
                $result['status'] = 1;
                echo json_encode($result);
            } else {
                echo json_encode(array('status' => 0));
            }
        }

    }
}
?>