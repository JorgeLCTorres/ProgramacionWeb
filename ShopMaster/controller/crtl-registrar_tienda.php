<?php
include('../model/db_tienda.php');
// CONDICION PARA SABER SI LAS VARIABLES NO ESTAN VACIAS
if (isset($_POST['nombre']) && isset($_POST['estado'])) {
    // GUARDA LOS VALORES EN VARIABLES LOCALES
    $store_name = $_POST['nombre'];
    $store_state = $_POST['estado'];
    // OBTIENE LOS DATOS DE LA DB DE LA TIENDA CON EL NOMBRE SI ES QUE EXISTE
    $store_exist = search_store($store_name);
    // CONDICION PARA SABER SI NO HAY REGISTRO EN LA DB, CASO CONTRARIO SE ATRAPARA CON MODAL
    if (count($store_exist) == 0) {
        // SE INSERTA LA TIENDA EN LA DB
        $result = insert_store($store_name, $store_state);
        // CONDICION PARA SABER SI LA INSERCION FUE EXITOSA
        if (!$result) {
            $result['status'] = 1;
            echo json_encode($result);
        } else {
            echo json_encode(array('status' => 0));
        }
    } else {
        echo json_encode(array('status' => 0));
    }
}
?>