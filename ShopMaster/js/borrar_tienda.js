// SE INICIALIZA UNA INSTANCIA DEL MODAL SWEETALERT
var Toast = Swal.mixin({
    title: "¿Seguro que desea Borrar?",
    text: "Este cambio será irreversible",
    type: "warning",
    showCancelButton: true,
    confirmButtonClass: "btn-danger",
    confirmButtonText: "Borrar",
    cancelButtonText: "Cancelar",
    closeOnConfirm: false,
    closeOnCancel: false
});

// FUNCION PARA CONFIRMAR SI SE DESEA BORRAR EL REGISTRO
function confirmar_borrar(store_id) {
    Toast.fire().then((result) => {
        // EN CASO QUE SI SE CONFIRME LA ELIMINACION
        if (result.isConfirmed) {
            $.ajax({
                // SE ESPECIFICA QUE LA SOLICITUD SERA DE TIPO POST
                type: "POST",
                // SE ESPECIFICA LA URL A LA QUE SE ENVIARAN LOS DATOS DEL FORMULARIO
                url: "../controller/crtl-borrar_tienda.php?id_tienda=" + store_id,
                // SI LA SOLICITUD SE REALIZA CORRECTAMENTE, SE EJECUTA UNA FUNCIÓN QUE PROCESA LA RESPUESTA DEL SERVIDOR
                success: function (r) {
                    Swal.fire("Eliminada con éxito", "La tienda ha sido eliminada", "success").then((res) => {
                        if (res.isConfirmed) {
                            window.location.href = '../view/home.php';
                        }
                    });
                }
            });
        } else {
            // EN CASO QUE SE DESEE CANCELAR LA ACCION
            Swal.fire("Eliminación cancelada", "La acción ha sido cancelada", "error");
        }
    });
}
