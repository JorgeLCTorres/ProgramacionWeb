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
function confirmar_borrar(id_usuario) {
    Toast.fire().then((result) => {
        // SI SE CONFIRMA LA ELIMINACION ENTONCES SE REALIZA EL PROCESO
        if (result.isConfirmed) {
            $.ajax({
                // SE ESPECIFICA QUE LA SOLICITUD SERA DE TIPO POST
                type: "POST",
                // SE ESPECIFICA LA URL A LA QUE SE ENVIARA EL ID DEL USUARIO A ELIMINAR
                url: "../controller/crtl-borrar_usuario.php?id_usuario=" + id_usuario,
                // SI LA SOLICITUD SE REALIZA CORRECTAMENTE ENTONCES SE MUESTRA UN MODAL SWEETALERT
                success: function (r) {
                    Swal.fire("Eliminado con éxito", "El usuario ha sido eliminado", "success").then((res) => {
                        // SI SE CONFIRMA EL MODAL DE ELIMINACIÓN EXITOSA ENTONCES SE RECARGA LA PÁGINA
                        if (res.isConfirmed) {
                            window.location.href = '../view/usuarios.php';
                        }
                    });
                }
            });
        // SI SE CANCELA LA ELIMINACIÓN ENTONCES SE MUESTRA UN MODAL SWEETALERT
        } else {
            Swal.fire("Eliminación cancelada", "La acción ha sido cancelada", "error");
        }
    });
}