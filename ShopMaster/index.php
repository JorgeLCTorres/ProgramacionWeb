<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="./plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <link rel="stylesheet" href="./css/login.css">
    <title>Login</title>
    <!-- ESTILO DE PARA NOMBRE DE INTEGRANTES -->
    <link href="./css/nombres.css" rel="stylesheet">
</head>

<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <!-- INICIA FORMULARIO DE LOGIN -->
                <form id="login" action="" novalidate>
                    <h2>Login</h2>
                    <!-- CAMPO DE USUARIO -->
                    <div class="inputbox">
                        <input id="user" name="user" type="user" required>
                        <label for="">Usuario</label>
                    </div>
                    <!-- CAMPO DE CONTRASEÑA -->
                    <div class="inputbox">
                        <input id="password" name="password" type="password" required>
                        <label for="">Contraseña</label>
                    </div>
                    <button type="submit" id="log-button">Log in</button>
                </form>
                <!-- TERMINA FORMULARIO DE LOGIN -->

                <!-- NOMBRE DE INTEGRANTES DEL EQUIPO -->
                <p>.</p>
                <p class="nombre">Jorge Luis Charles Torres</p>
                <p class="nombre">Mauricio Hernández Cepeda</p>
            </div>
        </div>
    </section>
    <!-- jQuery -->
    <script src="./plugins/jquery/jquery.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="./plugins/sweetalert2/sweetalert2.min.js"></script>
    <script src="./js/login.js"></script>
</body>

</html>