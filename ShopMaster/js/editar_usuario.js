$(document).ready(function () {
    // SE INICIALIZA UNA INSTANCIA DEL MODAL SWEETALERT
    var Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
    });
    // SE MANDA A LLAMAR EL FORM POR ID
    $('#editar_usuario').submit(function () {
        // SE CONDICIONA QUE LOS CAMPOS NO ESTEN VACIOS
        if ($('#nombre').val() != "" && $('#apellido').val() != "" && $('#username').val() != "" && $('#email').val() != "" && $('#password').val() != "") {
            // LOS DATOS DEL FORMULARIO SE CONVIERTEN EN UNA CADENA DE TEXTO EN FORMATO URL-ENCODED PARA QUE PUEDAN SER ENVIADOS AL SERVIDOR
            var datos = $(this).serialize();
            // SE MANDA UNA SOLICITUD AJAX AL SERVIDOR
            $.ajax({
                // SE ESPECIFICA QUE LA SOLICITUD SERA DE TIPO POST
                type: "POST",
                // SE ESPECIFICA LA URL A LA QUE SE ENVIARAN LOS DATOS DEL FORMULARIO
                url: "../controller/crtl-editar_usuario.php",
                // SE ENVIAN LOS DATOS DEL FORMULARIO
                data: datos,
                // SI LA SOLICITUD SE REALIZA CORRECTAMENTE, SE EJECUTA UNA FUNCIÓN QUE PROCESA LA RESPUESTA DEL SERVIDOR
                success: function (r) {
                    // console.log(r);
                    // SE CONVIERTE LA RESPUESTA DEL SERVIDOR, QUE ES UNA CADENA DE TEXTO JSON, EN UN OBJETO JAVASCRIPT
                    var jsonData = JSON.parse(r);
                    // SI EL SERVIDOR DEVUELVE 1, SE MUESTRA UNA ALERTA DE SWEETALERT INDICANDO QUE LA ACTUALIZACIÓN SE HA REGISTRADO
                    if (jsonData.status == 1) {
                        Toast.fire({
                            icon: 'success',
                            title: 'Actualización exitosa'
                        });
                    // SI EL SERVIDOR DEVUELVE 0, SE MUESTRA UNA ALERTA DE SWEETALERT INDICANDO QUE LOS DATOS SON INCORRECTOS
                    } else if (jsonData.status == 0) {
                        // console.log(jsonData);
                        Toast.fire({
                            icon: 'info',
                            title: 'Usuario ya registrado'
                        });
                    // SI EL SERVIDOR DEVUELVE -1, SE MUESTRA UNA ALERTA DE SWEETALERT INDICANDO QUE LOS DATOS SON LOS MISMOS
                    } else if (jsonData.status == -1) {
                        // console.log(jsonData);
                        Toast.fire({
                            icon: 'info',
                            title: 'No realizó ningún cambio'
                        });
                    }
                }
            });
        // SI LOS CAMPOS ESTAN VACIOS SE MUESTRA EL SWEETALERT
        } else {
            Toast.fire({
                icon: 'error',
                title: 'Campos vacíos'
            });
        }
        // SE EVITA QUE EL FORMULARIO SE ENVÍE DE MANERA CONVENCIONAL Y SE REDIRIJA A OTRA PÁGINA
        return false;
    });
});