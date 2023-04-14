<?php
//SE INICIA LA SESIÓN
session_start();
//SE VALIDA QUE HAYA UNA SESIÓN INICIADA PARA MOSTRAR EL CONTENIDO, SI NO LA HAY ENTONCES REDIRECCIONA AL ERROR 404
if ($_SESSION['session']['username'] == null || $_SESSION['session']['username'] == '') {
    header("Location:../view/404.php");
}
?>
<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <!-- TITULO DE LA TIENDA -->
        <a href="home.php" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="bi bi-shop" style="padding: 5px;"></i>ShopMaster</h3>
        </a>

        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="ms-3">
                <!-- SE USA EL DATO username DE LA SESIÓN PARA MOSTRARLO EN EL SIDEBAR -->
                <h6 class="mb-0">
                    <?php echo $_SESSION['session']['username']; ?>
                </h6>
                <span>
                    <?php
                    //SE EVALÚA SI EL USUARIO ES TIPO 1 PARA ALMACENAR EL TEXTO SuperAdmin EN LA VARIABLE $user_type
                    //SI NO ES TIPO 1 (ES TIPO 2), ENTONCES SE ALMACENA EL TEXTO Admin de Tienda EN LA VARIABLE $user_type
                    $user_type = ($_SESSION['session']['tipo'] == 1) ? 'SuperAdmin' : 'Admin de Tienda';
                    //SE ALMACENA EL NOMBRE DE LA TIENDA A LA QUE PERTENECE EL USUARIO EN LA VARIABLE $store_name
                    $store_name = $_SESSION['session']['tienda'];
                    //SE MUESTRAN LOS DATOS OBTENIDOS ANTERIORMENTE
                    echo nl2br("Nivel: $user_type\nTienda: $store_name");
                    ?>
                </span>
            </div>
        </div>

        <div class="navbar-nav w-100">
            <?php
            //SE EVALÚA SI EL USUARIO ES DE LA TIENDA ROOT PARA MOSTRAR SOLO LA OPCIÓN DE Tiendas
            if ($_SESSION['session']['tienda'] == 'root') {
                ?>
                <!-- SE AGREGA LA OPCIÓN DE Tiendas QUE REDIRECCIONA AL ARCHIVO home.php -->
                <a href="./home.php" class="nav-item nav-link"><i class="fa fa-store me-2"></i>Tiendas</a>
                <?php
            //SI EL USUARIO NO ES DE LA TIENDA ROOT (ES DE UNA TIENDA CUALQUIERA), ENTONCES SE MUESTRAN LAS SIGUIENTES OPCIONES
            } else {
                //SE EVALÚA SI EL USUARIO ES TIPO 1 (SuperAdmin) PARA AGREGAR LA OPCIÓN DE Tiendas
                if ($_SESSION['session']['tipo'] == 1) {
                    ?>
                    <!-- SE AGREGA LA OPCIÓN DE Tiendas QUE REDIRECCIONA AL ARCHIVO regresar-root.php -->
                    <a href="../controller/regresar-root.php" class="nav-item nav-link"><i
                            class="fa fa-store me-2"></i>Tiendas</a>
                    <?php
                }
                ?>
                <!-- SE AGREGA LA OPCIÓN DE Home QUE REDIRECCIONA AL ARCHIVO home.php -->
                <a href="./home.php" class="nav-item nav-link"><i class="fa fa-home me-2"></i></i>Home</a>
                <!-- SE AGREGA LA OPCIÓN DE Inventario QUE REDIRECCIONA AL ARCHIVO -->
                <a href="#" class="nav-item nav-link"><i class="fa fa-book me-2"></i>Inventario</a>
                <!-- SE AGREGA LA OPCIÓN DE Inventario QUE REDIRECCIONA AL ARCHIVO usuarios.php -->
                <a href="./usuarios.php" class="nav-item nav-link"><i class="fa fa-users me-2"></i>Usuarios</a>
                <!-- SE AGREGA LA OPCIÓN DE Inventario QUE REDIRECCIONA AL ARCHIVO -->
                <a href="./categorias.php" class="nav-item nav-link"><i class="fa fa-list me-2"></i>Categorías</a>
                <!-- SE AGREGA LA OPCIÓN DE Inventario QUE REDIRECCIONA AL ARCHIVO -->
                <a href="#" class="nav-item nav-link"><i class="fa fa-tags me-2"></i>Realizar venta</a>
                <!-- SE AGREGA LA OPCIÓN DE Inventario QUE REDIRECCIONA AL ARCHIVO -->
                <a href="#" class="nav-item nav-link"><i class="fa fa-clock me-2"></i>Historial de venta</a>
                <?php
            }
            ?>
        </div>
    </nav>
</div>
<!-- Sidebar End -->