<?php
include('../model/db_usuario.php');

if (isset($_POST['user']) && isset($_POST['password'])) {
    $username = $_POST['user'];
    $password = $_POST['password'];

    $result = search_user($username, $password);
    // debug_to_console($result);
    if (!$result) {
        echo json_encode(array('status' => 0));
    } else {
        session_start();
        $_SESSION['session'] = array();
        //SE RECORRE LA MATRIZ QUE CONTIENE EL ID, NOMBRE Y TIPO DE USUARIO
        foreach ($result as $fila) {
            $_SESSION['session']['username'] = $fila['username'];
            $_SESSION['session']['id'] = $fila['id'];
            $_SESSION['session']['tipo'] = $fila['tipo'];
            $_SESSION['session']['tienda'] = $fila['nombre'];
        }
        $result['status'] = 1;
        echo json_encode($result);
    }
} else {
    echo json_encode(array('status' => 0));
}
?>