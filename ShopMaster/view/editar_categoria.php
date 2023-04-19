<?php
//SE INICIA LA SESIÓN
session_start();
//SE VALIDA QUE HAYA UNA SESIÓN INICIADA PARA MOSTRAR EL CONTENIDO, SI NO LA HAY ENTONCES REDIRECCIONA AL ERROR 404
if ($_SESSION['session']['username'] == null || $_SESSION['session']['username'] == '') {
    header("Location:../view/404.php");
}
//SE OBTIENE LA VARIABLE QUE SE HA PASADO COMO PARAMETRO POR URL A ESTA PÁGINA
$id_categoria=$_GET['id_categoria'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Editar categoria</title>
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

            <!-- SE INCLUYE EL NAVBAR Y EL ARCHIVO QUE RETORNA VARIOS DATOS DE LA BASE DE DATOS-->
            <?php
            include("./layouts/navbar.php");
            include("../controller/crtl-datos_editar_categoria.php");
            ?>

            <!-- INICIO FORMULARIO -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Editar categoria</h6>
                            <form id="editar_categoria"  action="" novalidate>
                                <!-- CAMPO DE NOMBRE -->
                                <!-- EL INPUT SE CARGA CON EL NOMBRE DE LA CATEGORIA A EDITAR -->
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre de la categoría" value="<?php echo nombre_categoria($id_categoria); ?>" required>
                                    <label for="floatingInput">Nombre</label>
                                </div>
                                <!-- CAMPO DE DESCRIPCIÓN -->
                                <!-- EL INPUT SE CARGA CON LA DESCRIPCIÓN DE LA CATEGORIA A EDITAR -->
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Ingrese la descripción de la categoría" value="<?php echo descripcion_categoria($id_categoria); ?>" required>
                                    <label for="floatingInput">Descripción</label>
                                </div>
                                <input id="id_categoria" name="id_categoria" type="hidden" value="<?php echo $id_categoria; ?>">
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
    <script src="../js/editar_categoria.js"></script>
</body>

</html>