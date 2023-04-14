<?php
include('../model/db_categoria.php');
session_start();
// CONDICION PARA SABER SI LAS VARIABLES NO ESTAN VACIAS
if (isset($_POST['nombre']) && isset($_POST['descripcion'])) {
    // GUARDA LOS VALORES EN VARIABLES LOCALES
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $id_tienda = $_SESSION['session']['id_tienda'];
    // OBTIENE LOS DATOS DE LA DB DE LA CATEGORÍA CON EL NOMBRE Y EL ID DE LA TIENDA SI ES QUE EXISTE
    $category_exist = search_category_to_register($nombre, $id_tienda);
    // CONDICION PARA SABER SI NO HAY REGISTRO EN LA DB, CASO CONTRARIO SE ATRAPARA CON MODAL
    if (count($category_exist) == 0) {
        // SE INSERTA LA CATEGORÍA EN LA DB
        $result = insert_category($nombre, $descripcion, $id_tienda);
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