<?php
include('../model/db_tienda.php');

if (isset($_POST['nombre']) && isset($_POST['estado'])) {
    $store_name = $_POST['nombre'];
    $store_state = $_POST['estado'];

    $store_exist = search_store($store_name);
    // debug_to_console($result);
    if (count($store_exist) == 0) {
        $result = insert_store($store_name, $store_state);

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