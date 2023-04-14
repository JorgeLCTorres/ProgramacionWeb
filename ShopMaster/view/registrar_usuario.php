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
    <title>Registrar usuario</title>
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
            ?>

            <!-- INICIO FORMULARIO -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Registrar usuario</h6>
                            <form id="registrar_usuario"  action="">
                                <!-- CAMPO DE NOMBRE -->
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre del usuario" required>
                                    <label for="floatingInput">Nombre</label>
                                </div>
                                <!-- CAMPO DE APELLIDO -->
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingrese el apellido del usuario" required>
                                    <label for="floatingInput">Apellido</label>
                                </div>
                                <!-- CAMPO DE USERNAME -->
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Ingrese el username del usuario" required>
                                    <label for="floatingInput">Username</label>
                                </div>
                                <!-- CAMPO DE EMAIL -->
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese el email del usuario" required>
                                    <label for="floatingInput">Email</label>
                                </div>
                                <!-- CAMPO DE PASSWORD -->
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese el password del usuario" required>
                                    <label for="floatingInput">Password</label>
                                </div>
                                <!-- BOTÓN DE REGISTRAR -->
                                <button type="submit" class="btn btn-primary rounded-pill m-2">Registrar</button>
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
    <script src="../js/registrar_usuario.js"></script>
</body>

</html>