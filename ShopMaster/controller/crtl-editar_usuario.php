<?php
include('../model/db_usuario.php');
// SE INICIA LA SESSION
session_start();
// CONDICION PARA SABER SI LAS VARIABLES NO ESTAN VACIAS
if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
    // GUARDA LOS VALORES EN VARIABLES LOCALES
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $id_usuario = $_POST['id_usuario'];
    // OBTIENE LOS DATOS DE LA DB DEL USUARIO CON EL ID SI ES QUE EXISTE
    $usuario = get_user_by_id($id_usuario);
    // OBTIENE LOS DATOS DE LA DB DEL USUARIO CON EL USERNAME PARA SABER SI ES QUE EXISTE
    $user_exist = search_user_to_register($username);
    // CONDICION PARA SABER SI NO HAY REGISTRO EN LA DB, CASO CONTRARIO SE ATRAPARA CON MODAL
    if ($usuario[0]['nombre'] != $nombre || $usuario[0]['apellido'] != $apellido || $usuario[0]['username'] != $username || $usuario[0]['email'] != $email || $usuario[0]['password'] != $password) {
        if (count($user_exist) != 1 || $user_exist[0]['id'] == $id_usuario) {
            // SE ACTUALIZA LA CATEGORÍA EN LA DB
            $result = update_user($id_usuario, $nombre, $apellido, $username, $email, $password);
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