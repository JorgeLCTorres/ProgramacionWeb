<?php
//SE INVOCA EL ARCHIVO php QUE CONTIENE TODAS LAS FUNCIONES DE LA BASE DE DATOS
include_once('funcionesDB.php');

//isset DEVUELVE TRUE SI EXISTE EL OBJETO (VARIABLE) Y TIENE UN VALOR DISTINTO DE NULL
//      DEVUELVE FALSE SI ES LO CONTRARIO
if (isset($_POST['nombre'], $_POST['descripcion'])){

    //SE INVOCA LA FUNCIÓN QUE AGREGA UNA CATEGORIA Y SE LE PASAN COMO PARAMETRO LOS DATOS DE LOS INPUT
    crear_categoria($_POST['nombre'], $_POST['descripcion']);

    //SE REDIRECCIONA A LA PÁGINA QUE CONTIENE LA TABLA DE CATEGORÍAS DE PRODUCTOS
    header("location: tablaCategoriasProductos.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Registro de categoría de productos</title>
        <!-- Bootstrap 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/adminlte.min.css">
    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                    </li>
                </ul>
            </nav> <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img src="dist/img/perfil.jpg" class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info">
                            <a href="" class="d-block">Jorge Luis Charles Torres</a>
                        </div>
                    </div>
                    
                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class
                            with font-awesome or any other icon font library -->

                            <!-- REGISTROS -->
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-edit"></i>
                                    <p>
                                        Registros
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <!-- REGISTRO DE PRODUCTOS -->
                                    <li class="nav-item">
                                        <a href="registroProducto.php" class="nav-link">
                                            <i class="nav-icon fas fa-edit"></i>
                                            <p>
                                                Registro de producto
                                            </p>            
                                        </a>         
                                    </li>

                                    <!-- REGISTRO DE CATEGORIA DE PRODUCTOS -->
                                    <li class="nav-item">
                                        <a href="registroCategoriaProductos.php" class="nav-link">              
                                            <i class="nav-icon fas fa-edit"></i>
                                            <p>
                                                Registro de categoría de productos
                                            </p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            
                            <!-- TABLAS -->
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-table"></i>
                                    <p>
                                        Tablas
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <!-- TABLA DE PRODUCTOS -->
                                    <li class="nav-item">
                                        <a href="tablaProductos.php" class="nav-link">
                                            <i class="nav-icon fas fa-table"></i>
                                            <p>
                                                Tabla de productos
                                            </p>            
                                        </a>         
                                    </li>

                                    <!-- TABLA DE CATEGORIAS DE PRODUCTOS -->
                                    <li class="nav-item">
                                        <a href="tablaCategoriasProductos.php" class="nav-link">              
                                            <i class="nav-icon fas fa-table"></i>
                                            <p>
                                                Tabla de categorías de productos
                                            </p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            
                        </ul>
                    </nav> <!-- /.sidebar-menu -->
                </div> <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Registro de categoría de productos</h1>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <!-- left column -->
                            <div class="col-md-6">
                                <!-- general form elements -->
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Formulario</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!--------------------------------------------------->
                                    <!-- Inicio del formulario -->
                                    <form action="registroCategoriaProductos.php" method="POST">
                                        <div class="card-body">
                                            <!-- NOMBRE -->
                                            <div class="form-floating">
                                                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese el nombre" required>
                                                <label for="floatingInput">Ingrese el nombre</label>
                                            </div>

                                            <p></p> <!-- PARA SEPARAR LOS INPUT -->

                                            <!-- DESCRIPCIÓN -->
                                            <div class="form-floating">
                                                <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Ingrese la descripción" required>
                                                <label for="floatingInput">Ingrese la descripción</label>
                                            </div>

                                        </div> <!-- /.card-body -->

                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Guardar</button>
                                            <button type="reset" name= "botonR" class="btn btn-primary">Cancelar</button>
                                        </div>
                                    </form>
                                </div>
                            </div> <!-- /.card -->
                        </div>
                    </div><!-- /.container-fluid -->
                </section>
            </div> <!-- /.content-wrapper -->

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside> <!-- /.control-sidebar -->
        </div> <!-- ./wrapper -->

        <!-- Bootstrap 5 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <!-- jQuery -->
        <script src="plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- bs-custom-file-input -->
        <script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.min.js"></script>
    </body>
</html>