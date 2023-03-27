<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Datos ingresados en la BD</title>
        <!-- Bootstrap 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
<body>
    <main>
        <!-- SE COLOCA TITULO -->
        <h1 class="text-center">DATOS</h1>
        <!-- SE CREA LA TABLA -->
        <table class="table table-dark table-striped-columns table-bordered border-white">
            <thead>
                <tr>
                    <th scope="col">CÓDIGO</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">PRECIO DE VENTA</th>
                    <th scope="col">PRECIO DE COMPRA</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $servername = "localhost";
                $username = "debian-sys-maint";
                $password = "5a3c5a57843d4321c78071733de4b9494a1db0c99794928f";
                $BD = "formularios";

                // CONEXIÓN A LA BD DEL SERVER
                $con = mysqli_connect($servername, $username, $password, $BD);

                //COMPROBAR CONEXIÓN
                if($con==false){
                    die("Error, no hay conexión a la base de datos".mysqli_connect_error());
                }
                //TOMAR LOS 5 VALORES DEL FORMULARIO A TRAVES DE LOS DATOS DE LOS CAMPOS
                $codigo=$_REQUEST['codigo'];
                $nombre=$_REQUEST['nombre'];
                $precioVenta=$_REQUEST['precioVenta'];
                $precioCompra=$_REQUEST['precioCompra'];

                //EJECUTAR EL QUERY DE INSERCIÓN DE DATOS
                $sql="INSERT INTO productos VALUES ('$codigo','$nombre','$precioVenta','$precioCompra')";

                //MANDAR MENSAJE DE DATOS GUARDADOS
                if(mysqli_query($con, $sql)){
                    echo nl2br("<tr>
                        <td> $codigo</td>
                        <td> $nombre</td>
                        <td> $precioVenta</td>
                        <td> $precioCompra</td>
                    </tr>");
                }else{
                    echo "ERROR! $sql. ".mysqli_error($con);
                }

                //CERRAR CONEXIÓN
                mysqli_close($con)
                ?>
            </tbody>
        </table>
    </main>
    <!-- Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>