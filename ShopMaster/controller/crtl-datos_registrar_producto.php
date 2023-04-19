<?php
include('../model/db_categoria.php');
// SE INICIA LA SESSION
session_start();
// GUARDA TODA LA TABLA DE CATEGORIAS
$categorias = getall_categories_store($_SESSION['session']['id_tienda']);
// RECORRE LA INFO DE LA TABLA POR FILAS
foreach ($categorias as $fila) {
?>
    <!-- SE CREA UNA OPCIÓN EN EL INPUT TIPO SELECT POR CADA FILA (CATEGORÍA) -->
    <option value="<?php echo $fila['id'] ?>"><?php echo $fila['nombre'] ?></option>
<?php
}
?>