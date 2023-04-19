<?php
//SE INICIA LA SESIÓN
session_start();
//SE VALIDA QUE HAYA UNA SESIÓN INICIADA PARA MOSTRAR EL CONTENIDO, SI NO LA HAY ENTONCES REDIRECCIONA AL ERROR 404
if ($_SESSION['session']['username'] == null || $_SESSION['session']['username'] == '') {
    header("Location:../view/404.php");
}
//SE OBTIENE LA VARIABLE QUE SE HA PASADO COMO PARAMETRO POR URL A ESTA PÁGINA
$id_producto = $_GET['id_producto'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Editar Producto</title>
    <!-- SE INCLUYEN LAS ETIQUETAS DE REFERENCIA link -->
    <?php
    include("./layouts/head.php");
    ?>
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- SE INCLUYE UN SPINNER DE CARGA Y EL SIDEBAR-->
        <?php
        include("./layouts/spinner.php");
        include("./layouts/sidebar.php");
        ?>

        <!-- Content Start -->
        <div class="content">

            <!-- SE INCLUYE EL NAVBAR -->
            <?php
            include("./layouts/navbar.php");
            include("../controller/crtl-datos_editar_producto.php");
            ?>

            <!-- INICIO FORMULARIO -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Editar Producto</h6>
                            <form id="editar_producto" action="" novalidate>
                                <!-- CAMPO DE CÓDIGO PRODUCTO -->
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="codigo" name="codigo"
                                        placeholder="Ingrese el código del producto" value="<?php echo codigo_producto($id_producto); ?>" required>
                                    <label for="floatingInput">Código</label>
                                </div>
                                <!-- CAMPO DE NOMBRE -->
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="nombre" name="nombre"
                                        placeholder="Ingrese el nombre del producto" value="<?php echo nombre_producto($id_producto); ?>" required>
                                    <label for="floatingInput">Nombre</label>
                                </div>
                                <!-- CAMPO DE PRECIO -->
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" min="0" id="precio" name="precio"
                                        placeholder="Ingrese el precio del producto" value="<?php echo precio_producto($id_producto); ?>" required>
                                    <label for="floatingInput">Precio</label>
                                </div>
                                <!-- CAMPO DE STOCK -->
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" min="0" id="stock" name="stock"
                                        placeholder="Ingrese el stock del producto" value="<?php echo stock_producto($id_producto); ?>" required>
                                    <label for="floatingInput">Stock</label>
                                </div>
                                <!-- CAMPO DE CATEGORÍA -->
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="categoria" name="categoria"
                                        aria-label="Floating label select example">
                                        <?php
                                        // SE INCLUYE LA FUNCIÓN QUE CREA UNA OPCIÓN DENTRO DEL SELECT POR CADA UNA DE LAS CATEGORIAS
                                        categoria_producto($id_producto);
                                        ?>
                                    </select>
                                    <label for="floatingSelect">Categoría</label>
                                </div>
                                <input id="id_producto" name="id_producto" type="hidden" value="<?php echo $id_producto; ?>">
                                <!-- BOTÓN DE ACTUALIZAR -->
                                <button type="submit" class="btn btn-primary rounded-pill m-2">Actualizar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FINAL FORMULARIO -->

            <!-- SE INCLUYE EL FOOTER QUE APARECE HASTA EL FINAL DE LA PÁGINA -->
            <?php
            include("./layouts/footer.php");
            ?>

        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- SE INCLUYEN LAS ETIQUETAS DE SCRIPT -->
    <?php
    include("./layouts/scripts.php");
    ?>

    <!-- SE INCLUYEN EL JS CORRESPONDIENTE A ESTA PÁGINA -->
    <script src="../js/editar_producto.js"></script>
</body>

</html>