function MostrarMensajeError(claseInput, mensaje){ //Funcion para mostrar el mensaje de error correspondiente en la interfaz
    let clase=document.querySelector(`.${claseInput}`); //Se obtiene el <div> con la clase form-group "claseInput" (el . representa form-group)
    clase.lastElementChild.innerHTML = mensaje; //Se inserta en HTML en el ultimo elemento del <div> el mensaje a mostrar
}

function Subir(){
    var id=document.form1.id.value;                             //Se consiguen los valores de entrada del formulario
    var nombre=document.form1.nombre.value;                     //
    var apellidoPaterno=document.form1.apellidoPaterno.value;   //
    var apellidoMaterno=document.form1.apellidoMaterno.value;   //
    var email=document.form1.email.value;                       //
    var telefono=document.form1.telefono.value;                 //
    var direccion=document.form1.direccion.value;               //
    var rfc=document.form1.rfc.value;                           //
    var categoria=document.form1.categoria.value;               //
    var datosIncompletos = new bootstrap.Modal(document.getElementById('datosIncompletos'));  // Se consigue una referencia al modal
    var mostrarDatos = new bootstrap.Modal(document.getElementById('mostrarDatos'));          //
    var modal_id=document.getElementById("modal_id");                           //Se consiguen los elementos (p) de salida del modal mostrarDatos
    var modal_nombre=document.getElementById("modal_nombre");                   //
    var modal_apellidoPaterno=document.getElementById("modal_apellidoPaterno"); //
    var modal_apellidoMaterno=document.getElementById("modal_apellidoMaterno"); //
    var modal_email=document.getElementById("modal_email");                     //
    var modal_telefono=document.getElementById("modal_telefono");               //
    var modal_direccion=document.getElementById("modal_direccion");             //
    var modal_rfc=document.getElementById("modal_rfc");                         //
    var modal_categoria=document.getElementById("modal_categoria");             //
    var idInput=document.getElementById("id");                          //Se consiguen los elementos (inputs) de entrada del formulario
    var nombreInput=document.getElementById("nombre")                   //
    var apellidoPaternoInput=document.getElementById("apellidoPaterno") //
    var apellidoMaternoInput=document.getElementById("apellidoMaterno") //
    var emailInput=document.getElementById("email")                     //
    var telefonoInput=document.getElementById("telefono")               //
    var direccionInput=document.getElementById("direccion")             //
    var rfcInput=document.getElementById("rfc")                         //
    var categoriaInput=document.getElementById("categoria")             //
    var flag1=false;    //Se inicializan las banderas que mandaran llamar el modal que despliega los datos ingresados
    var flag2=false;    //
    var flag3=false;    //
    var flag4=false;    //
    var flag5=false;    //
    var flag6=false;    //
    var flag7=false;    //
    var flag8=false;    //
    var flag9=false;    //
    var formulario=document.getElementById('form1');

    //PRIMERO: SE VALIDA QUE TODOS LOS CAMPOS ESTEN CONTESTADOS
    if (id=="" || id.trim()==""){ //Se comprueba si el campo id esta vacio //NOTA: .trim elimina los espacios de una cadena
        MostrarMensajeError("id", "INGRESE UN ID");
        idInput.classList.add("is-invalid"); //Cambia la clase del Input para pintarlo de color rojo y agregarle un icono de error
        datosIncompletos.show(); //Se manda mostrar el modal de error
    }else{ //Se comprueba si el campo id esta lleno
        idInput.classList.remove("is-invalid");
        idInput.classList.add("is-valid"); //Cambia la clase del Input para pintarlo de color verde y agregarle un icono de correcto
        MostrarMensajeError("id", "");
        flag1=true;
    }

    if (nombre=="" || nombre.trim()==""){ //Se comprueba si el campo nombre esta vacio //NOTA: .trim elimina los espacios de una cadena
        MostrarMensajeError("nombre", "INGRESE UN NOMBRE");
        nombreInput.classList.add("is-invalid");
        datosIncompletos.show(); //Se manda mostrar el modal de error
    }else{ //Se comprueba si el campo nombre esta lleno
        nombreInput.classList.remove("is-invalid");
        nombreInput.classList.add("is-valid"); //Cambia la clase del Input para pintarlo de color verde y agregarle un icono de correcto
        MostrarMensajeError("nombre", "");
        flag2=true;
    }

    if (apellidoPaterno=="" || apellidoPaterno.trim()==""){ //Se comprueba si el campo apellidoPaterno esta vacio //NOTA: .trim elimina los espacios de una cadena
        MostrarMensajeError("apellidoPaterno", "INGRESE UN APELLIDO");
        apellidoPaternoInput.classList.add("is-invalid");
        datosIncompletos.show(); //Se manda mostrar el modal de error
    }else{ //Se comprueba si el campo apellidoPaterno esta lleno
        apellidoPaternoInput.classList.remove("is-invalid");
        apellidoPaternoInput.classList.add("is-valid"); //Cambia la clase del Input para pintarlo de color verde y agregarle un icono de correcto
        MostrarMensajeError("apellidoPaterno", "");
        flag3=true;
    }

    if (apellidoMaterno=="" || apellidoMaterno.trim()==""){ //Se comprueba si el campo apellidoMaterno esta vacio //NOTA: .trim elimina los espacios de una cadena
        MostrarMensajeError("apellidoMaterno", "INGRESE UN APELLIDO");
        apellidoMaternoInput.classList.add("is-invalid");
        datosIncompletos.show(); //Se manda mostrar el modal de error
    }else{ //Se comprueba si el campo apellidoMaterno esta lleno
        apellidoMaternoInput.classList.remove("is-invalid");
        apellidoMaternoInput.classList.add("is-valid"); //Cambia la clase del Input para pintarlo de color verde y agregarle un icono de correcto
        MostrarMensajeError("apellidoMaterno", "");
        flag4=true;
    }
    
    if (email=="" || email.trim()==""){ //Se comprueba si el campo email esta vacio //NOTA: .trim elimina los espacios de una cadena
        MostrarMensajeError("email", "INGRESE UN EMAIL");
        emailInput.classList.add("is-invalid");
        datosIncompletos.show(); //Se manda mostrar el modal de error
    }else{//Se comprueba si el campo email esta lleno
        emailInput.classList.remove("is-invalid");
        emailInput.classList.add("is-valid"); //Cambia la clase del Input para pintarlo de color verde y agregarle un icono de correcto
        MostrarMensajeError("email", "");
        flag5=true;
    }

    if (telefono=="" || telefono.trim()==""){ //Se comprueba si el campo telefono esta vacio //NOTA: .trim elimina los espacios de una cadena
        MostrarMensajeError("telefono", "INGRESE UN TELEFONO");
        telefonoInput.classList.add("is-invalid");
        datosIncompletos.show(); //Se manda mostrar el modal de error
    }else{ //Se comprueba si el campo telefono esta lleno
        telefonoInput.classList.remove("is-invalid");
        telefonoInput.classList.add("is-valid"); //Cambia la clase del Input para pintarlo de color verde y agregarle un icono de correcto
        MostrarMensajeError("telefono", "");
        flag6=true;
    }

    if (direccion=="" || direccion.trim()==""){ //Se comprueba si el campo direccion esta vacio //NOTA: .trim elimina los espacios de una cadena
        MostrarMensajeError("direccion", "INGRESE UNA DIRECCIÓN");
        direccionInput.classList.add("is-invalid");
        datosIncompletos.show(); //Se manda mostrar el modal de error
    }else{ //Se comprueba si el campo direccion esta lleno
        direccionInput.classList.remove("is-invalid");
        direccionInput.classList.add("is-valid"); //Cambia la clase del Input para pintarlo de color verde y agregarle un icono de correcto
        MostrarMensajeError("direccion", "");
        flag7=true;
    }

    if (rfc=="" || rfc.trim()==""){ //Se comprueba si el campo rfc esta vacio //NOTA: .trim elimina los espacios de una cadena
        MostrarMensajeError("rfc", "INGRESE UN RFC");
        rfcInput.classList.add("is-invalid");
        datosIncompletos.show(); //Se manda mostrar el modal de error
    }else{ //Se comprueba si el campo rfc esta lleno
        rfcInput.classList.remove("is-invalid");
        rfcInput.classList.add("is-valid"); //Cambia la clase del Input para pintarlo de color verde y agregarle un icono de correcto
        MostrarMensajeError("rfc", "");
        flag8=true;
    }

    if (categoria=="" || categoria.trim()==""){ //Se comprueba si el campo categoria esta vacio //NOTA: .trim elimina los espacios de una cadena
        MostrarMensajeError("categoria", "INGRESE UNA CATEGORIA");
        categoriaInput.classList.add("is-invalid");
        datosIncompletos.show(); //Se manda mostrar el modal de error
    }else{ //Se comprueba si el campo categoria esta lleno
        categoriaInput.classList.remove("is-invalid");
        categoriaInput.classList.add("is-valid"); //Cambia la clase del Input para pintarlo de color verde y agregarle un icono de correcto
        MostrarMensajeError("categoria", "");
        flag9=true;
    }


    //TERCERO: SE MANDA LA INFORMACION AL MODAL QUE DESPLIEGA LOS DATOS INGRESADOS
    if (flag1==true && flag2==true && flag3==true && flag4==true && flag5==true && flag6==true && flag7==true && flag8==true && flag9==true){ //Se comprueba si todos los campos estan contestados
        modal_id.innerHTML = "Id: " + id;
        modal_nombre.innerHTML = "Nombre: " + nombre;
        modal_apellidoPaterno.innerHTML = "Apellido paterno: " + apellidoPaterno;
        modal_apellidoMaterno.innerHTML = "Apellido materno: " + apellidoMaterno;
        modal_email.innerHTML = "Email: " + email;
        modal_telefono.innerHTML = "Telefono: " + telefono;
        modal_direccion.innerHTML = "Dirección: " + direccion;
        modal_rfc.innerHTML = "RFC: " + telefono;
        modal_categoria.innerHTML = "Categoría: " + direccion;
        mostrarDatos.show(); //Se manda mostrar el modal que despliega los datos ingresados
    //CUARTO: SE REINICIAN LOS VALORES EN VACIO DESPUES DE MOSTRAR EL MODAL CON LOS DATOS INGRESADOS
        formulario.id.value=formulario.nombre.value=formulario.apellidoPaterno.value=formulario.apellidoMaterno.value=formulario.email.value=formulario.telefono.value=formulario.direccion.value=formulario.rfc.value=formulario.categoria.value='';
    //QUINTO: SE QUITA LA CLASE DE LOS INPUT PARA REINICIARLOS A SU MANERA NORMAL
        idInput.classList.remove("is-valid");
        nombreInput.classList.remove("is-valid");
        apellidoPaternoInput.classList.remove("is-valid");
        apellidoMaternoInput.classList.remove("is-valid");
        emailInput.classList.remove("is-valid");
        telefonoInput.classList.remove("is-valid");
        direccionInput.classList.remove("is-valid");
        rfcInput.classList.remove("is-valid");
        categoriaInput.classList.remove("is-valid");
    }
}