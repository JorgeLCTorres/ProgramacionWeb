<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Registro de productos</title>
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"&gt;
        <!-- Font Awesome -->
        <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/adminlte.min.css">
        <!-- Bootstrap 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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
                            
                            <!-- REGISTRO DE PRODUCTOS -->
                            <li class="nav-item">
                                <a href="" class="nav-link">
                                    <i class="nav-icon fas fa-edit"></i>
                                    <p>
                                        Registro de productos
                                    </p>
                                </a>
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
                                <h1>Registro de productos</h1>
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
                                    <form action="guardar.php" method="post">
                                        <div class="card-body">
                                            <!-- CÓDIGO -->
                                            <div class="form-floating">
                                                <input type="text" class="form-control" name="codigo" id="codigo" placeholder="Ingrese el código" required>
                                                <label for="floatingInput">Ingrese el código</label>
                                            </div>

                                            <!-- NOMBRE -->
                                            <div class="form-floating">
                                                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese el nombre" required>
                                                <label for="floatingInput">Ingrese el nombre</label>
                                            </div>

                                            <!-- PRECIO VENTA -->
                                            <div class="form-floating">
                                                <input type="number" class="form-control" name="precioVenta" id="precioVenta" placeholder="Ingrese el precio de venta" required>
                                                <label for="floatingInput">Ingrese el precio de venta</label>
                                            </div>

                                            <!-- PRECIO COMPRA -->
                                            <div class="form-floating">
                                                <input type="number" class="form-control" name="precioCompra" id="precioCompra" placeholder="Ingrese el precio de compra" required>
                                                <label for="floatingInput">Ingrese el precio de compra</label>
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

        <!-- jQuery -->
        <script src="plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Bootstrap 5 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <!-- bs-custom-file-input -->
        <script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.min.js"></script>
    </body>
</html>