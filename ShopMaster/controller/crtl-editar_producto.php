<?php
include('../model/db_inventario.php');
// SE INICIA LA SESSION
session_start();
// CONDICION PARA SABER SI LAS VARIABLES NO ESTAN VACIAS
if (isset($_POST['codigo']) && isset($_POST['nombre']) && isset($_POST['precio']) && isset($_POST['stock']) && isset($_POST['categoria'])) {
    // GUARDA LOS VALORES EN VARIABLES LOCALES
    $codigo = $_POST['codigo'];
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    $categoria = $_POST['categoria'];
    $id_producto = $_POST['id_producto'];
    // OBTIENE LOS DATOS DE LA DB DEL PRODUCTO CON EL ID SI ES QUE EXISTE
    $producto = get_product_by_id($id_producto);
    // OBTIENE LOS DATOS DE LA DB DEL USUARIO CON EL USERNAME PARA SABER SI ES QUE EXISTE
    $product_exist = search_product_to_register($codigo, $_SESSION['session']['id_tienda']);
    // CONDICION PARA SABER SI NO HAY REGISTRO EN LA DB, CASO CONTRARIO SE ATRAPARA CON MODAL
    if ($producto[0]['codigo'] != $codigo || $producto[0]['nombre'] != $nombre || $producto[0]['precio'] != $precio || $producto[0]['stock'] != $stock || $producto[0]['id_categoria'] != $categoria) {
        if (count($product_exist) != 1 || $product_exist[0]['id'] == $id_producto) {
            // SE ACTUALIZA LA CATEGORÍA EN LA DB
            $result = update_product($id_producto, $codigo, $nombre, $precio, $stock, $categoria);
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
