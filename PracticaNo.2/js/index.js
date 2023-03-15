function MostrarMensajeError(claseInput, mensaje){ //Funcion para mostrar el mensaje de error correspondiente en la interfaz
    let clase=document.querySelector(`.${claseInput}`); //Se obtiene el <div> con la clase form-group "claseInput" (el . representa form-group)
    clase.lastElementChild.innerHTML = mensaje; //Se inserta en HTML en el ultimo elemento del <div> el mensaje a mostrar
}

function Acceder(){
    var usuario=document.login_form1.usuario.value; //Se consiguen los valores de entrada del formulario
    var clave=document.login_form1.clave.value;     //
    var usuarioInput=document.getElementById("usuario");    //Se consiguen los elementos (inputs) de entrada del formulario
    var claveInput=document.getElementById("clave")         //
    const usuarioCorrecto="admin";  //Se inicializan las constantes con los valores correctos
    const claveCorrecta="admin";    //
    var usuarioFlag=false;  //Se inicializan banderas para se usan para saber si ya se puede redireccionar al formulario
    var claveFlag=false;    //
    var datosIncorrectos = new bootstrap.Modal(document.getElementById('datosIncorrectos'));  // Se consigue una referencia al modal
    
    //PRIMERO: SE VALIDA QUE TODOS LOS CAMPOS CONTENGAN LO ESPERADO
    if (usuario!=usuarioCorrecto){ //Se comprueba si el campo usuario esta incorrecto
        MostrarMensajeError("usuario", "USUARIO INCORRECTO");
        usuarioInput.classList.add("is-invalid"); //Cambia la clase del Input para pintarlo de color rojo y agregarle un icono de error
        datosIncorrectos.show(); //Se manda mostrar el modal de error
    }else{ //Se comprueba si el campo usuario esta correcto
        usuarioInput.classList.remove("is-invalid");
        usuarioInput.classList.add("is-valid"); //Cambia la clase del Input para pintarlo de color verde y agregarle un icono de correcto
        MostrarMensajeError("usuario", "");
        usuarioFlag=true;
    }
    if (clave!=claveCorrecta){ //Se comprueba si el campo clave esta incorrecto
        MostrarMensajeError("clave", "CONTRASEÑA INCORRECTA");
        claveInput.classList.add("is-invalid"); //Cambia la clase del Input para pintarlo de color rojo y agregarle un icono de error
        datosIncorrectos.show(); //Se manda mostrar el modal de error
    }else{ //Se comprueba si el campo clave esta correcto
        claveInput.classList.remove("is-invalid");
        claveInput.classList.add("is-valid"); //Cambia la clase del Input para pintarlo de color verde y agregarle un icono de correcto
        MostrarMensajeError("clave", "");
        claveFlag=true;
    }
    
    //SEGUNDO: SE VALIDA QUE TODOS LOS CAMPOS ESTEN CONTESTADOS
    if (usuario=="" || usuario.trim()==""){ //Se comprueba si el campo usuario esta vacio //NOTA: .trim elimina los espacios de una cadena
        MostrarMensajeError("usuario", "INGRESE UN USUARIO");
    }
    if (clave=="" || clave.trim()==""){ //Se comprueba si el campo clave esta vacio //NOTA: .trim elimina los espacios de una cadena
        MostrarMensajeError("clave", "INGRESE UNA CONTRASEÑA");
    }

    //TERCERO: SE REDIRECCIONA AL FORMULARIO
    if (usuarioFlag==true && claveFlag==true){ //Se comprueba si las credenciales ingresadas fueron correctas
        location.href = 'dashboard.html';
    }
}
