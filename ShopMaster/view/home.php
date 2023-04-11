<?php
session_start();
if ($_SESSION['session']['username'] == null || $_SESSION['session']['username'] == '') {
    header("Location:../view/404.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <?php
    include("./layouts/head.php");
    ?>
    <link rel="stylesheet" type="text/css" href="../datatables/css/jquery.dataTable.css">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <?php
        include("./layouts/spinner.php");
        include("./layouts/sidebar.php");
        ?>

        <!-- Content Start -->
        <div class="content">

            <?php
            include("./layouts/navbar.php");
            ?>

            <?php
            if ($_SESSION['session']['tienda'] == 'root') {
                ?>
                <div class="container-fluid pt-4 px-4">
                    <div class="bg-secondary text-center rounded p-4">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h6 class="mb-0">Tiendas</h6>
                            <a href="registrar_tienda.php">Agregar nueva tienda</a>
                        </div>
                        <div class="container-xxl flex-grow-1 container-p-y">
                            <table id="example" class="display table-responsive text-nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>Estado</th>
                                        <th>Editar</th>
                                        <th>Borrar</th>
                                        <th>Ingresar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    include("../controller/crtl-tiendas.php");
                                ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>Estado</th>
                                        <th>Editar</th>
                                        <th>Borrar</th>
                                        <th>Ingresar</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            <!-- //////////////////////////////////////////////////////////////////////////// -->
                <?php
            } else {
                ?>
                <!-- ESTADISTICAS -->
                <div class="container-fluid pt-4 px-4">
                    <div class="row g-4">
                        <div class="col-sm-6 col-xl-3">
                            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-5">
                                <i class="fa fa-bag-shopping fa-3x text-primary fa-beat-fade"></i>
                                <div class="ms-3">
                                    <p class="mb-2">Total de productos</p>
                                    <h6 class="mb-0">1234</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-5">
                                <i class="fa fa-users fa-3x text-primary fa-beat-fade"></i>
                                <div class="ms-3">
                                    <p class="mb-2">Total de usuarios</p>
                                    <h6 class="mb-0">1234</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-5">
                                <i class="fa fa-list fa-3x text-primary fa-beat-fade"></i>
                                <div class="ms-3">
                                    <p class="mb-2">Total de categorías</p>
                                    <h6 class="mb-0">1234</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-5">
                                <i class="fa fa-arrow-right-arrow-left fa-3x text-primary fa-beat-fade"></i>
                                <div class="ms-3">
                                    <p class="mb-2">Total de cambios</p>
                                    <h6 class="mb-0">1234</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sale & Revenue End -->


                <!-- Sales Chart Start -->
                <div class="container-fluid pt-4 px-4">
                    <div class="row g-4">
                        <div class="col-sm-12 col-xl-6">
                            <div class="bg-secondary text-center rounded p-4">
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <h6 class="mb-0">Worldwide Sales</h6>
                                    <a href="">Show All</a>
                                </div>
                                <canvas id="worldwide-sales"></canvas>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xl-6">
                            <div class="bg-secondary text-center rounded p-4">
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <h6 class="mb-0">Salse & Revenue</h6>
                                    <a href="">Show All</a>
                                </div>
                                <canvas id="salse-revenue"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sales Chart End -->
                <?php
            }
            ?>

            <?php
            include("./layouts/footer.php");
            ?>

        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <?php
    include("./layouts/scripts.php");
    ?>

    <!-- Icon Font -->
    <script src="https://kit.fontawesome.com/ce926228e8.js" crossorigin="anonymous"></script>

    <!-- Page JS -->
    <script type="text/javascript" language="javascript" src="../datatables/js/jquery.dataTables.js"></script>
    <script>
      $(document).ready(function () {
          $('#example').DataTable();
      });
    </script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>