<?php
include('../model/db_tienda.php');
// CONDICION PARA SABER SI LAS VARIABLES NO ESTAN VACIAS
if (isset($_POST['nombre']) && isset($_POST['estado'])) {
    // GUARDA LOS VALORES EN VARIABLES LOCALES
    $store_name = $_POST['nombre'];
    $store_state = $_POST['estado'];
    $store_id = $_POST['id_tienda'];
    // OBTIENE LOS DATOS DE LA DB DE LA TIENDA CON EL NOMBRE Y ESTADO SI ES QUE EXISTE
    // $store = registered_store($store_id, $store_name);
    $store = buscar_tienda($store_id);
    // OBTIENE LOS DATOS DE LA DB DE LA TIENDA CON EL NOMBRE SI ES QUE EXISTE
    $store_exist = search_store($store_name);
    // CONDICION PARA SABER SI NO HAY REGISTRO EN LA DB, CASO CONTRARIO SE ATRAPARA CON MODAL
    if ($store[0]['nombre'] != $store_name || $store[0]['estado'] != $store_state) {
        if (count($store_exist) != 1 || $store_exist[0]['id'] == $store_id) {
            // SE INSERTA LA TIENDA EN LA DB
            $result = update_store($store_id, $store_name, $store_state);
            //$result = getall_stores();
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
    } else {
        echo json_encode(array('status' => -1));
    }
}
?>