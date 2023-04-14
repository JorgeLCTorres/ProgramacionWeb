<?php
include('../model/db_usuario.php');
session_start();
// CONDICION PARA SABER SI LAS VARIABLES NO ESTAN VACIAS
if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
    // GUARDA LOS VALORES EN VARIABLES LOCALES
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $id_tienda = $_SESSION['session']['id_tienda'];
    // OBTIENE LOS DATOS DE LA DB DEL USUARIO CON EL USERNAME SI ES QUE EXISTE
    $user_exist = search_user_to_register($username);
    // CONDICION PARA SABER SI NO HAY REGISTRO EN LA DB, CASO CONTRARIO SE ATRAPARA CON MODAL
    if (count($user_exist) == 0) {
        // SE INSERTA EL USUARIO EN LA DB
        $result = insert_user($nombre, $apellido, $username, $email, $password, $id_tienda);
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