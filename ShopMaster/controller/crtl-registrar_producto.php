<?php
include('../model/db_inventario.php');
session_start();
// CONDICION PARA SABER SI LAS VARIABLES NO ESTAN VACIAS
if (isset($_POST['codigo']) && isset($_POST['nombre']) && isset($_POST['precio']) && isset($_POST['stock']) && isset($_POST['categoria'])) {
    // GUARDA LOS VALORES EN VARIABLES LOCALES
    $codigo = $_POST['codigo'];
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    $categoria = $_POST['categoria'];
    $id_tienda = $_SESSION['session']['id_tienda'];
    // OBTIENE LOS DATOS DE LA DB DEL PRODUCTO CON EL CÓDIGO Y EL ID DE LA TIENDA SI ES QUE EXISTE
    $product_exist = search_product_to_register($codigo, $id_tienda);
    // CONDICION PARA SABER SI NO HAY REGISTRO EN LA DB, CASO CONTRARIO SE ATRAPARA CON MODAL
    if (count($product_exist) == 0) {
        // SE INSERTA EL PRODUCTO EN LA DB
        $result = insert_product($codigo, $nombre, $precio, $stock, $categoria, $id_tienda);
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