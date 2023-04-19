<?php
include('../model/db_categoria.php');
// SE INICIA LA SESSION
session_start();
// CONDICION PARA SABER SI LAS VARIABLES NO ESTAN VACIAS
if (isset($_POST['nombre']) && isset($_POST['descripcion'])) {
    // GUARDA LOS VALORES EN VARIABLES LOCALES
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $id_categoria = $_POST['id_categoria'];
    // OBTIENE LOS DATOS DE LA DB DE LA CATEGORIA CON EL ID SI ES QUE EXISTE
    $categoria = search_category($id_categoria);
    // OBTIENE LOS DATOS DE LA DB DE LA CATEGORÍA CON EL NOMBRE Y ID DE LA TIENDA SI ES QUE EXISTE
    $category_exist = buscar_categoria($nombre, $_SESSION['session']['id_tienda']);
    // CONDICION PARA SABER SI NO HAY REGISTRO EN LA DB, CASO CONTRARIO SE ATRAPARA CON MODAL
    if ($categoria[0]['nombre'] != $nombre || $categoria[0]['descripcion'] != $descripcion) {
        if (count($category_exist) != 1 || $category_exist[0]['id'] == $id_categoria) {
            // SE ACTUALIZA LA CATEGORÍA EN LA DB
            $result = update_category($id_categoria, $nombre, $descripcion);
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