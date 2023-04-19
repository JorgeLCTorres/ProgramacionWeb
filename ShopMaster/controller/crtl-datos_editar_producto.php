<?php
include('../model/db_inventario.php');
include('../model/db_categoria.php');
// SE INICIA LA SESSION
session_start();

// FUNCION QUE RETORNA EL CODIGO DEL PRODUCTO
function codigo_producto($id_producto)
{
    // SE LE PASA COMO PARAMETRO LA VARIABLE $id_producto A LA FUNCIÓN QUE BUSCA EN LA BD
    $producto = get_product_by_id($id_producto);
    //SE RECORRE LA MATRIZ QUE RETORNA LA FUNCIÓN ANTERIOR PARA SOLO RETORNAR EL CODIGO DEL PRODUCTO QUE HAYA COINCIDIDO CON EL ID
    foreach ($producto as $fila) {
        return $fila['codigo'];
    }
}

// FUNCION QUE RETORNA EL NOMBRE DEL PRODUCTO
function nombre_producto($id_producto)
{
    // SE LE PASA COMO PARAMETRO LA VARIABLE $id_producto A LA FUNCIÓN QUE BUSCA EN LA BD
    $producto = get_product_by_id($id_producto);
    //SE RECORRE LA MATRIZ QUE RETORNA LA FUNCIÓN ANTERIOR PARA SOLO RETORNAR EL NOMBRE DEL PRODUCTO QUE HAYA COINCIDIDO CON EL ID
    foreach ($producto as $fila) {
        return $fila['nombre'];
    }
}

// FUNCION QUE RETORNA EL PRECIO DEL PRODUCTO
function precio_producto($id_producto)
{
    // SE LE PASA COMO PARAMETRO LA VARIABLE $id_producto A LA FUNCIÓN QUE BUSCA EN LA BD
    $producto = get_product_by_id($id_producto);
    //SE RECORRE LA MATRIZ QUE RETORNA LA FUNCIÓN ANTERIOR PARA SOLO RETORNAR EL PRECIO DEL PRODUCTO QUE HAYA COINCIDIDO CON EL ID
    foreach ($producto as $fila) {
        return $fila['precio'];
    }
}

// FUNCION QUE RETORNA EL PRECIO DEL PRODUCTO
function stock_producto($id_producto)
{
    // SE LE PASA COMO PARAMETRO LA VARIABLE $id_producto A LA FUNCIÓN QUE BUSCA EN LA BD
    $producto = get_product_by_id($id_producto);
    //SE RECORRE LA MATRIZ QUE RETORNA LA FUNCIÓN ANTERIOR PARA SOLO RETORNAR EL STOCK DEL PRODUCTO QUE HAYA COINCIDIDO CON EL ID
    foreach ($producto as $fila) {
        return $fila['stock'];
    }
}

// FUNCION QUE RETORNA LA CATEGORIA DEL PRODUCTO
function unica_categoria_producto($id_producto)
{
    // SE LE PASA COMO PARAMETRO LA VARIABLE $id_producto A LA FUNCIÓN QUE BUSCA EN LA BD
    $producto = get_category_name($id_producto, $_SESSION['session']['id_tienda']);
    //SE RECORRE LA MATRIZ QUE RETORNA LA FUNCIÓN ANTERIOR PARA SOLO RETORNAR LA CATEGORIA DEL PRODUCTO QUE HAYA COINCIDIDO CON EL ID
    foreach ($producto as $fila) {
        return $fila['nombre_categoria'];
    }
}

// FUNCION QUE RETORNA LA CATEGORÍA DEL PRODUCTO
function categoria_producto($id_producto)
{
    // SE LE PASA COMO PARAMETRO LA VARIABLE $id_producto A LA FUNCIÓN QUE BUSCA EN LA BD
    $producto = get_product_by_id($id_producto);
    // GUARDA TODA LA TABLA DE CATEGORIAS
    $categorias = getall_categories_store($_SESSION['session']['id_tienda']);
    ?>
    <?php
    // RECORRE LA INFO DE LA TABLA POR FILAS
    foreach ($categorias as $fila) {
        $selected = $fila['id'] == $producto[0]['id_categoria'] ? "selected" : "";
    ?>
        <!-- SE CREA UNA OPCIÓN EN EL INPUT TIPO SELECT POR CADA FILA (CATEGORÍA) -->
        <option value="<?php echo $fila['id'];?>" <?php echo $selected; ?>><?php echo $fila['nombre']; ?></option>
    <?php
    }
    ?>
<?php
}
?>