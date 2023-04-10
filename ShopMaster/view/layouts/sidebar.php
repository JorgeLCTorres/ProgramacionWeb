<?php
session_start();
if ($_SESSION['session']['username'] == null || $_SESSION['session']['username'] == '') {
    header("Location:../view/404.php");
}
?>
<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="home.php" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="bi bi-shop" style="padding: 5px;"></i>ShopMaster</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">

            <div class="ms-3">
                <h6 class="mb-0">
                    <?php echo $_SESSION['session']['username']; ?>
                </h6>
                <span>
                    <?php
                    $user_type = ($_SESSION['session']['tipo'] == 1) ? 'SuperAdmin' : 'Admin de Tienda';
                    $store_name = $_SESSION['session']['tienda'];
                    echo nl2br("Nivel: $user_type\nTienda: $store_name");
                    ?>
                </span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <?php
            if ($_SESSION['session']['tienda'] == 'root') {
                ?>
                <a href="./home.php" class="nav-item nav-link"><i class="fa fa-store me-2"></i>Tiendas</a>
                <?php
            } else {
                ?>
                <a href="./home.php" class="nav-item nav-link"><i class="fa fa-home me-2"></i></i>Home</a>
                <a href="#" class="nav-item nav-link"><i class="fa fa-book me-2"></i>Inventario</a>
                <a href="#" class="nav-item nav-link"><i class="fa fa-users me-2"></i>Usuarios</a>
                <a href="#" class="nav-item nav-link"><i class="fa fa-list me-2"></i>Categorías</a>
                <a href="#" class="nav-item nav-link"><i class="fa fa-tags me-2"></i>Realizar venta</a>
                <a href="#" class="nav-item nav-link"><i class="fa fa-clock me-2"></i>Historial de venta</a>
                <?php
            }
            ?>
        </div>
    </nav>
</div>
<!-- Sidebar End -->