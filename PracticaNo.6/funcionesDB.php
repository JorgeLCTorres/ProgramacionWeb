<?php
include('conexion.php');

//FUNCIÓN QUE AGREGA UN PRODUCTO A LA TABLA productos EN LA BD
function crear_producto($codigo,$nombre,$descripcion,$categoria,$precio_venta,$precio_compra){
    global $pdo;
    //SE CREA LA SENTENCIA SQL
    $sql = "INSERT INTO productos (codigo,nombre,descripcion,categoria,precio_venta,precio_compra) VALUES('$codigo','$nombre','$descripcion','$categoria','$precio_venta','$precio_compra')";
	//SE PREPARA LA SENTENCIA SQL
    $statement = $pdo->prepare($sql);
    //SE EJECUTA LA SENTENCIA SQL
	$statement->execute();
}

//FUNCIÓN QUE AGREGA UNA CATEGORIA A LA TABLA categorias EN LA BD
function crear_categoria($nombre,$descripcion){
    global $pdo;
    //SE CREA LA SENTENCIA SQL
    $sql = "INSERT INTO categorias (nombre,descripcion) VALUES('$nombre','$descripcion')";
	//SE PREPARA LA SENTENCIA SQL
    $statement = $pdo->prepare($sql);
    //SE EJECUTA LA SENTENCIA SQL
	$statement->execute();
}

//FUNCIÓN QUE RETORNA EL ID Y NOMBRE DE CADA UNA DE LAS CATEGORÍAS (PARA LLENAR EL SELECT)
function solicitar_id_nombre(){
    global $pdo;
    //SE CREA LA SENTENCIA SQL
    $sql = "SELECT id, nombre FROM categorias";
	//SE PREPARA LA SENTENCIA SQL
    $statement = $pdo->prepare($sql);
    //SE EJECUTA LA SENTENCIA SQL
	$statement->execute();
    //SE DEVUELVEN LOS RESULTADOS EN FORMA DE MATRIZ DE OBJETOS
    $results=$statement->fetchAll();
    //SE RETORNA LA MATRIZ DE OBJETOS
    return $results;
}

//FUNCIÓN QUE RETORNA LA TABLA COMPLETA
function solicitar_tabla($tabla){
    global $pdo;
    //SE CREA LA SENTENCIA SQL
    $sql = "SELECT * FROM $tabla";
	//SE PREPARA LA SENTENCIA SQL
    $statement = $pdo->prepare($sql);
    //SE EJECUTA LA SENTENCIA SQL
	$statement->execute();
    //SE DEVUELVEN LOS RESULTADOS EN FORMA DE MATRIZ DE OBJETOS
    $results=$statement->fetchAll();
    //SE RETORNA LA MATRIZ DE OBJETOS
    return $results;
}

//FUNCIÓN QUE RETORNA LA TABLA DE productos PERO EN LUGAR DE MOSTRAR EL id DE CATEGORÍA, SE MUESTRA EL NOMBRE
function solicitar_productos(){
    global $pdo;
    //SE CREA LA SENTENCIA SQL
    $sql = "SELECT productos.id, productos.codigo, productos.nombre, productos.descripcion, productos.precio_venta, productos.precio_compra, categorias.nombre AS categoria FROM productos INNER JOIN categorias ON productos.categoria=categorias.id";
	//SE PREPARA LA SENTENCIA SQL
    $statement = $pdo->prepare($sql);
    //SE EJECUTA LA SENTENCIA SQL
	$statement->execute();
    //SE DEVUELVEN LOS RESULTADOS EN FORMA DE MATRIZ DE OBJETOS
    $results=$statement->fetchAll();
    //SE RETORNA LA MATRIZ DE OBJETOS
    return $results;
}
?>