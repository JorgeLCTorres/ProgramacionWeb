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

            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Registrar tienda</h6>
                            <form id="registrar_tienda"  action="" novalidate>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre de la tienda" required>
                                    <label for="floatingInput">Nombre</label>
                                </div>
                                <fieldset class="row mb-3">
                                    <legend class="col-form-label col-sm-2 pt-0">Estado</legend>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="estado" id="activa" value="1" checked>
                                            <label class="form-check-label" for="activa">Activa</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="estado" id="inactiva" value="2">
                                            <label class="form-check-label" for="inactiva">Inactiva</label>
                                        </div>
                                    </div>
                                </fieldset>
                                <button type="submit" class="btn btn-primary rounded-pill m-2">Registrar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

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
    
    <script src="../js/registrar_tienda.js"></script>
</body>

</html>