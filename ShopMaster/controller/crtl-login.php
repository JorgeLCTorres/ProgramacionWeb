<?php
include('../model/db_usuario.php');
// CONDICION PARA SABER SI LAS VARIABLES NO ESTAN VACIAS
if (isset($_POST['user']) && isset($_POST['password'])) {
    // GUARDA LOS VALORES EN VARIABLES LOCALES
    $username = $_POST['user'];
    $password = $_POST['password'];
    // OBTIENE LOS DATOS DE LA DB DEL USUARIO CON EL USERNAME Y PASSWORD SI ES QUE EXISTE
    $result = search_user($username, $password);
    // CONDICION PARA SABER SI NO HAY REGISTRO EN LA DB, CASO CONTRARIO SE ATRAPARA CON MODAL
    if (!$result) {
        echo json_encode(array('status' => 0));
    } else {
        // SE INICIA LA SESSION
        session_start();
        $_SESSION['session'] = array();
        //SE RECORRE LA MATRIZ QUE CONTIENE LOS DATOS PARA LA SESSION
        foreach ($result as $fila) {
            $_SESSION['session']['id'] = $fila['id'];
            $_SESSION['session']['tipo'] = $fila['tipo'];
            $_SESSION['session']['username'] = $fila['username'];
            $_SESSION['session']['id_tienda'] = $fila['id_tienda'];
            $_SESSION['session']['tienda'] = $fila['nombre'];
            $_SESSION['session']['estado_tienda'] = $fila['estado'];
        }
        $result['status'] = 1;
        echo json_encode($result);
    }
} else {
    echo json_encode(array('status' => 0));
}
?>