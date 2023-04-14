<?php
//SE INICIA LA SESIÓN
session_start();
?>
<!-- Navbar Start -->
<nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
    <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
        <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
    </a>
    <a href="#" class="sidebar-toggler flex-shrink-0">
        <i class="fa fa-bars"></i>
    </a>
    <div class="navbar-nav align-items-center ms-auto">
        <div class="nav-item dropdown">
            <!-- SE USA EL DATO username DE LA SESIÓN PARA MOSTRARLO EN EL NAVBAR -->
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <span class="d-none d-lg-inline-flex">
                    <?php echo $_SESSION['session']['username'] ?>
                </span>
            </a>
            <!-- SE AGREGA LA OPCIÓN DE LOG OUT QUE REDIRECCIONA AL ARCHIVO logout.php -->
            <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                <a href="../controller/logout.php" class="dropdown-item">Log Out</a>
            </div>
        </div>
    </div>
</nav>
<!-- Navbar End -->