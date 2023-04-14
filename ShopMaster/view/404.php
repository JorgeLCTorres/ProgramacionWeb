<!DOCTYPE html>
<html lang="en">

<head>
    <title>Not Found</title>
    <!-- SE INCLUYEN LAS ETIQUETAS DE REFERENCIA link -->
    <?php
    include("./layouts/head.php");
    ?>
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- SE INCLUYE UN SPINNER DE CARGA -->
        <?php
        include("./layouts/spinner.php");
        ?>

        <!-- EMPIEZA ERROR 404 -->
        <div class="container-fluid">
            <div class="row vh-100 bg-secondary rounded align-items-center justify-content-center mx-0">
                <div class="col-md-6 text-center p-4">
                    <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                    <h1 class="display-1 fw-bold">404</h1>
                    <h1 class="mb-4">Página no encontrada</h1>
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="../">Ir al login</a>
                </div>
            </div>
        </div>
        <!-- TERMINA ERROR 404 -->
    </div>

    <!-- SE INCLUYEN LAS ETIQUETAS DE SCRIPT -->
    <?php
    include("./layouts/scripts.php");
    ?>
</body>

</html>