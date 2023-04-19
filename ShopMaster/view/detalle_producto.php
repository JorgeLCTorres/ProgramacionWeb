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
    <title>Detalles de Producto</title>
    <!-- SE INCLUYEN LAS ETIQUETAS DE REFERENCIA link -->
    <?php
    include("./layouts/head.php");
    ?>
    <!-- SE REFERENCIAN LOS ESTILOS DE LA DATATABLE -->
    <link rel="stylesheet" type="text/css" href="../datatables/css/jquery.dataTable.css">

    <!-- SE REFERENCIAN LOS ESTILOS PARA EL MENSAJE DE ESTADO DE CADA UNA DE LAS TIENDAS -->
    <link href="../css/estado.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- SE INCLUYE UN SPINNER DE CARGA Y EL SIDEBAR -->
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

            <?php
            //SE EVALÚA SI LA TIENDA ESTA INACTIVA PARA MOSTRAR SOLAMENTE UNA ADVERTENCIA COMO CONTENIDO
            if ($_SESSION['session']['estado_tienda'] == 2) { ?>
                <div class="container-fluid pt-4 px-4">
                    <div class="row vh-100 bg-secondary rounded align-items-center justify-content-center mx-0">
                        <div class="col-md-6 text-center p-4">
                            <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                            <h1 class="mb-4">Tienda inactiva</h1>
                            <p class="mb-4">Necesita solicitar la activación de su tienda</p>
                            <a class="btn btn-primary rounded-pill py-3 px-5" href="../controller/logout.php">Ir al
                                login</a>
                        </div>
                    </div>
                </div>
                <?php
                //SI LA TIENDA ESTA ACTIVA ENTONCES SE MUESTRA EL CONTENIDO
            } else {
                ?>
                <!-- INICIO DETALLES DE PRODUCTO -->
                <div class="container-fluid pt-4 px-4">
                    <div class="row g-4">
                        <div class="col-sm-12 col-xl-6">
                            <div class="bg-secondary rounded h-100 p-4">
                                <center>
                                    <img src="../img/box.webp" alt="A Box" width="643" height="520">
                                </center>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xl-6">
                            <div class="row g-4">
                                <div class="bg-secondary rounded h-100 p-4">
                                    <h6 class="mb-4">Detalles de Producto</h6>
                                    <form id="detalle_producto" action="" novalidate>
                                        <!-- CAMPO DE CÓDIGO PRODUCTO -->
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="codigo" name="codigo"
                                                placeholder="Ingrese el código del producto"
                                                value=" <?php echo codigo_producto($id_producto); ?>" disabled required>
                                            <label for="floatingInput">Código</label>
                                        </div>
                                        <!-- CAMPO DE NOMBRE -->
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="nombre" name="nombre"
                                                placeholder="Ingrese el nombre del producto"
                                                value="<?php echo nombre_producto($id_producto); ?>" disabled required>
                                            <label for="floatingInput">Nombre</label>
                                        </div>
                                        <!-- CAMPO DE PRECIO -->
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" min="0" id="precio" name="precio"
                                                placeholder="Ingrese el precio del producto"
                                                value="<?php echo precio_producto($id_producto); ?>" disabled required>
                                            <label for="floatingInput">Precio</label>
                                        </div>
                                        <!-- CAMPO DE STOCK -->
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" min="0" id="stock" name="stock"
                                                placeholder="Ingrese el stock del producto"
                                                value="<?php echo stock_producto($id_producto); ?>" disabled required>
                                            <label for="floatingInput">Stock</label>
                                        </div>
                                        <!-- CAMPO DE CATEGORÍA -->
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="categoria" name="categoria"
                                                placeholder="Ingrese el nombre de la categoria"
                                                value="<?php echo unica_categoria_producto($id_producto); ?>" disabled
                                                required>
                                            <label for="floatingInput">Categoría</label>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <br>
                            <div class="row g-4">
                                <div class="bg-secondary rounded h-100 p-4">
                                    <h6 class="mb-4">Detalles de Producto</h6>
                                    <form id="modificar_stock" action="" novalidate>
                                        <!-- CAMPO DE CÓDIGO PRODUCTO -->
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="referencia" name="referencia"
                                                placeholder="Ingrese la referencia del Stock" required>
                                            <label for="floatingInput">Referencia</label>
                                        </div>
                                        <!-- CAMPO DE NOMBRE -->
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="unidades" name="unidades"
                                                placeholder="Ingrese la cantidad de unidades" min="0" required>
                                            <label for="floatingInput">Unidades</label>
                                        </div>
                                        <input id="id_producto" name="id_producto" type="hidden" value="<?php echo $id_producto; ?>">
                                        <button type="button" onClick="agregar()" class="btn btn-success rounded-pill m-2">Agregar Stock</button>
                                        <button type="button" onClick="eliminar()" class="btn btn-danger rounded-pill m-2">Eliminar Stock</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FINAL DETALLES DE PRODUCTO -->
                <?php
            }
            ?>

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

    <!-- Icon Font -->
    <script src="https://kit.fontawesome.com/ce926228e8.js" crossorigin="anonymous"></script>

    <!-- Page JS -->
    <script type="text/javascript" language="javascript" src="../datatables/js/jquery.dataTables.js"></script>
    <!-- SE INCLUYE UN SCRIPT PARA EL FUNCIONAMIENTO DEL FORMULARIO DE STOCK -->
    <script src="../js/detalle_producto.js"></script>
    <!-- SE INCLUYE UN SCRIPT PARA EL FUNCIONAMIENTO DE LA DATATABLE -->
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>