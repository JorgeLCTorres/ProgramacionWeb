function Acceder(){
    var usuario=document.login.usuario.value; //Se consiguen los valores de entrada del formulario
    var clave=document.login.clave.value;     //
    const usuarioClienteCorrecto="jperez";      //Se inicializan las constantes con los valores correctos
    const claveClienteCorrecta="mipssw";        //
    const usuarioVendedorCorrecto="vendedor";   //
    const claveVendedorCorrecta="mipssw-vend";  //
    var datosIncorrectos = new bootstrap.Modal(document.getElementById('datosIncorrectos'));  // Se consigue una referencia al modal
    
    //SE VALIDA QUE LOS CAMPOS CONTENGAN LO ESPERADO
    if (usuario==usuarioClienteCorrecto && clave==claveClienteCorrecta){ //Se comprueba si el campo usuario y contraseña esta correcto para modo cliente
        location.href = 'dashboardCliente.html'; //Se redirecciona al dashboard de los clientes
    }else{
        if (usuario==usuarioVendedorCorrecto && clave==claveVendedorCorrecta){ //Se comprueba si el campo usuario y contraseña esta correcto para modo vendedor
            location.href = 'dashboardVendedor.html'; //Se redirecciona al dashboard de los vendedores
        }else{
            datosIncorrectos.show(); //Se manda mostrar el modal de error
        }
    }
}