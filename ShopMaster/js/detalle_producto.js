// SE INICIALIZA UNA INSTANCIA DEL MODAL SWEETALERT
var Toast = Swal.mixin({
    title: "¿Seguro que desea Borrar?",
    type: "warning",
    confirmButtonClass: "btn-danger",
    confirmButtonText: "Entendido",
    closeOnConfirm: false,
    closeOnCancel: false
});

//SE OBTIENE LA CANTIDAD DE STOCK QUE SE TIENE ACTUALMENTE
var stock = $('#stock').val()
var id_producto = $('#id_producto').val()

function agregar() {
    if ($('#referencia').val() != "" && $('#unidades').val() != "") {
        if ($('#unidades').val() < 0) {
            Toast.fire({
                icon: 'error',
                title: 'Valores negativos'
            });
        } else {
            // LOS DATOS DEL FORMULARIO SE CONVIERTEN EN UNA CADENA DE TEXTO EN FORMATO URL-ENCODED PARA QUE PUEDAN SER ENVIADOS AL SERVIDOR
            var datos = $('#modificar_stock').serialize();
            datos += "&tipo=" + 1 + "&stock=" + stock + "&id_producto=" + id_producto
            // SE MANDA UNA SOLICITUD AJAX AL SERVIDOR
            $.ajax({
                // SE ESPECIFICA QUE LA SOLICITUD SERA DE TIPO POST
                type: "POST",
                // SE ESPECIFICA LA URL A LA QUE SE ENVIARAN LOS DATOS DEL FORMULARIO
                url: "../controller/crtl-modificar_stock.php",
                // SE ENVIAN LOS DATOS DEL FORMULARIO
                data: datos,
                // SI LA SOLICITUD SE REALIZA CORRECTAMENTE, SE EJECUTA UNA FUNCIÓN QUE PROCESA LA RESPUESTA DEL SERVIDOR
                success: function (r) {
                    // console.log(r);
                    // SE CONVIERTE LA RESPUESTA DEL SERVIDOR, QUE ES UNA CADENA DE TEXTO JSON, EN UN OBJETO JAVASCRIPT
                    var jsonData = JSON.parse(r);
                    // SI EL SERVIDOR DEVUELVE 1, SE MUESTRA UNA ALERTA DE SWEETALERT INDICANDO QUE LA ACTUALIZACIÓN SE HA REGISTRADO
                    if (jsonData.status == 1) {
                        Swal.fire("Actualización exitosa", "El stock ha sido actualizado", "success").then((res) => {
                            // SI SE CONFIRMA EL MODAL DE ELIMINACIÓN EXITOSA ENTONCES SE RECARGA LA PÁGINA
                            if (res.isConfirmed) {
                                window.location.href = '../view/detalle_producto.php?id_producto=' + id_producto;
                            }
                        });
                        // SI EL SERVIDOR DEVUELVE 0, SE MUESTRA UNA ALERTA DE SWEETALERT INDICANDO QUE LOS DATOS SON INCORRECTOS
                    } else if (jsonData.status == 0) {
                        // console.log(jsonData);
                        Toast.fire({
                            icon: 'info',
                            title: 'Actualización fallida'
                        });
                    }
                }
            });
        }
        // SI LOS CAMPOS ESTAN VACIOS SE MUESTRA EL SWEETALERT
    } else {
        Toast.fire({
            icon: 'error',
            title: 'Campos vacíos'
        });
    }
    // SE EVITA QUE EL FORMULARIO SE ENVÍE DE MANERA CONVENCIONAL Y SE REDIRIJA A OTRA PÁGINA
    return false;
}


function eliminar() {
    console.log('Hola mundo');
    if ($('#referencia').val() != "" && $('#unidades').val() != "") {
        if ($('#unidades').val() < 0) {
            Toast.fire({
                icon: 'error',
                title: 'Valores negativos'
            });
        } else {
            // LOS DATOS DEL FORMULARIO SE CONVIERTEN EN UNA CADENA DE TEXTO EN FORMATO URL-ENCODED PARA QUE PUEDAN SER ENVIADOS AL SERVIDOR
            var datos = $('#modificar_stock').serialize();
            datos += "&tipo=" + 2 + "&stock=" + stock + "&id_producto=" + id_producto
            // SE MANDA UNA SOLICITUD AJAX AL SERVIDOR
            $.ajax({
                // SE ESPECIFICA QUE LA SOLICITUD SERA DE TIPO POST
                type: "POST",
                // SE ESPECIFICA LA URL A LA QUE SE ENVIARAN LOS DATOS DEL FORMULARIO
                url: "../controller/crtl-modificar_stock.php",
                // SE ENVIAN LOS DATOS DEL FORMULARIO
                data: datos,
                // SI LA SOLICITUD SE REALIZA CORRECTAMENTE, SE EJECUTA UNA FUNCIÓN QUE PROCESA LA RESPUESTA DEL SERVIDOR
                success: function (r) {
                    // console.log(r);
                    // SE CONVIERTE LA RESPUESTA DEL SERVIDOR, QUE ES UNA CADENA DE TEXTO JSON, EN UN OBJETO JAVASCRIPT
                    var jsonData = JSON.parse(r);
                    // SI EL SERVIDOR DEVUELVE 1, SE MUESTRA UNA ALERTA DE SWEETALERT INDICANDO QUE LA ACTUALIZACIÓN SE HA REGISTRADO
                    if (jsonData.status == 1) {
                        Swal.fire("Actualización exitosa", "El stock ha sido actualizado", "success").then((res) => {
                            // SI SE CONFIRMA EL MODAL DE ELIMINACIÓN EXITOSA ENTONCES SE RECARGA LA PÁGINA
                            if (res.isConfirmed) {
                                window.location.href = '../view/detalle_producto.php?id_producto=' + id_producto;
                            }
                        });
                        // SI EL SERVIDOR DEVUELVE 0, SE MUESTRA UNA ALERTA DE SWEETALERT INDICANDO QUE LOS DATOS SON INCORRECTOS
                    } else if (jsonData.status == 0) {
                        // console.log(jsonData);
                        Toast.fire({
                            icon: 'info',
                            title: 'Actualización fallida'
                        });
                    } else if (jsonData.status == -1) {
                        // console.log(jsonData);
                        Toast.fire({
                            icon: 'info',
                            title: 'Actualización fallida',
                            text: 'No es posible eliminar más unidades de las disponibles'
                        });
                    }
                }
            });
        }
        // SI LOS CAMPOS ESTAN VACIOS SE MUESTRA EL SWEETALERT
    } else {
        Toast.fire({
            icon: 'error',
            title: 'Campos vacíos'
        });
    }
    // SE EVITA QUE EL FORMULARIO SE ENVÍE DE MANERA CONVENCIONAL Y SE REDIRIJA A OTRA PÁGINA
    return false;
}