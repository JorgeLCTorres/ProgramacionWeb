<?php
//SE INICIA LA SESIÓN
session_start();
//SE VALIDA QUE HAYA UNA SESIÓN INICIADA PARA MOSTRAR EL CONTENIDO, SI NO LA HAY ENTONCES REDIRECCIONA AL ERROR 404
if ($_SESSION['session']['username'] == null || $_SESSION['session']['username'] == '') {
    header("Location:../view/404.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Inventario</title>
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
                <!-- TABLA DE INVENTARIO -->
                <div class="container-fluid pt-4 px-4">
                    <div class="bg-secondary text-center rounded p-4">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h6 class="mb-0">Inventario</h6>
                            <a href="registrar_producto.php">Agregar nuevo producto</a>
                        </div>
                        <div class="container-xxl flex-grow-1 container-p-y">
                            <table id="example" class="display table-responsive text-nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Nombre</th>
                                        <th>Fecha Registro</th>
                                        <th>Precio Producto</th>
                                        <th>Categoría</th>
                                        <th>Stock</th>
                                        <th>Editar</th>
                                        <th>Borrar</th>
                                        <th>Detalles</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- SE INCLUYE EL ARCHIVO QUE IMPRIME CADA UNO DE LOS PRODUCTOS DENTRO DE LA DATATABLE -->
                                    <?php
                                    include("../controller/crtl-inventario.php");
                                    ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Código</th>
                                        <th>Nombre</th>
                                        <th>Fecha Registro</th>
                                        <th>Precio Producto</th>
                                        <th>Categoría</th>
                                        <th>Stock</th>
                                        <th>Editar</th>
                                        <th>Borrar</th>
                                        <th>Detalles</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- TABLA DE INVENTARIO END -->
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
    <!-- SE INCLUYE UN SCRIPT PARA EL FUNCIONAMIENTO DEL BOTÓN BORRAR INVENTARIO -->
    <script src="../js/borrar_inventario.js"></script>
    <!-- SE INCLUYE UN SCRIPT PARA EL FUNCIONAMIENTO DE LA DATATABLE -->
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>