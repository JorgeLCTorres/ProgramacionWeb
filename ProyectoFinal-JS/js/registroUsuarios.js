function MostrarMensajeError(claseInput, mensaje){ //Funcion para mostrar el mensaje de error correspondiente en la interfaz
    let clase=document.querySelector(`.${claseInput}`); //Se obtiene el <div> con la clase form-group "claseInput" (el . representa form-group)
    clase.lastElementChild.innerHTML = mensaje; //Se inserta en HTML en el ultimo elemento del <div> el mensaje a mostrar
}

function Subir(){
    var usuario=document.form1.usuario.value;   //Se consiguen los valores de entrada del formulario
    var nombre=document.form1.nombre.value;     //
    var apellido=document.form1.apellido.value; //
    var email=document.form1.email.value;       //
    var clave1=document.form1.clave1.value;     //
    var clave2=document.form1.clave2.value;     //
    var hobbiesLength=document.form1.hobby.length; //Cantidad de hobbies
    var hobbies="";
    var datosIncompletos = new bootstrap.Modal(document.getElementById('datosIncompletos'));  // Se consigue una referencia al modal
    var datosNoCoinciden = new bootstrap.Modal(document.getElementById('datosNoCoinciden'));  //
    var mostrarDatos = new bootstrap.Modal(document.getElementById('mostrarDatos'));          //
    var modal_usuario=document.getElementById("modal_usuario");    //Se consiguen los elementos (p) de salida del modal mostrarDatos
    var modal_nombre=document.getElementById("modal_nombre");      //
    var modal_apellido=document.getElementById("modal_apellido");  //
    var modal_email=document.getElementById("modal_email");        //
    var modal_clave=document.getElementById("modal_clave");        //
    var modal_hobbies=document.getElementById("modal_hobbies");    //
    var usuarioInput=document.getElementById("usuario");    //Se consiguen los elementos (inputs) de entrada del formulario
    var nombreInput=document.getElementById("nombre")       //
    var apellidoInput=document.getElementById("apellido")   //
    var emailInput=document.getElementById("email")         //
    var clave1Input=document.getElementById("clave1")       //
    var clave2Input=document.getElementById("clave2")       //
    var flag1=false;    //Se inicializan las banderas que mandaran llamar el modal que despliega los datos ingresados
    var flag2=false;    //
    var flag3=false;    //
    var flag4=false;    //
    var flag5=false;    //
    var flag6=false;    //
    var flag7=false;    //
    var flag8=false;    //
    var formulario=document.getElementById('form1');

    //PRIMERO: SE VALIDA QUE TODOS LOS CAMPOS ESTEN CONTESTADOS
    if (usuario=="" || usuario.trim()==""){ //Se comprueba si el campo usuario esta vacio //NOTA: .trim elimina los espacios de una cadena
        MostrarMensajeError("usuario", "INGRESE UN USUARIO");
        usuarioInput.classList.add("is-invalid"); //Cambia la clase del Input para pintarlo de color rojo y agregarle un icono de error
        datosIncompletos.show(); //Se manda mostrar el modal de error
    }else{ //Se comprueba si el campo usuario esta lleno
        usuarioInput.classList.remove("is-invalid");
        usuarioInput.classList.add("is-valid"); //Cambia la clase del Input para pintarlo de color verde y agregarle un icono de correcto
        MostrarMensajeError("usuario", "");
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

    if (apellido=="" || apellido.trim()==""){ //Se comprueba si el campo apellido esta vacio //NOTA: .trim elimina los espacios de una cadena
        MostrarMensajeError("apellido", "INGRESE UN APELLIDO");
        apellidoInput.classList.add("is-invalid");
        datosIncompletos.show(); //Se manda mostrar el modal de error
    }else{ //Se comprueba si el campo apellido esta lleno
        apellidoInput.classList.remove("is-invalid");
        apellidoInput.classList.add("is-valid"); //Cambia la clase del Input para pintarlo de color verde y agregarle un icono de correcto
        MostrarMensajeError("apellido", "");
        flag3=true;
    }
    
    if (email=="" || email.trim()==""){ //Se comprueba si el campo email esta vacio //NOTA: .trim elimina los espacios de una cadena
        MostrarMensajeError("email", "INGRESE UN EMAIL");
        emailInput.classList.add("is-invalid");
        datosIncompletos.show(); //Se manda mostrar el modal de error
    }else{//Se comprueba si el campo email esta lleno
        emailInput.classList.remove("is-invalid");
        emailInput.classList.add("is-valid"); //Cambia la clase del Input para pintarlo de color verde y agregarle un icono de correcto
        MostrarMensajeError("email", "");
        flag4=true;
    }

    if (clave1!=clave2){ //Se comprueba si los campos clave son diferentes
        MostrarMensajeError("clave1", "LA CONTRASEÑA NO COINCIDE");
        MostrarMensajeError("clave2", "LA CONTRASEÑA NO COINCIDE");
        clave1Input.classList.add("is-invalid");
        clave2Input.classList.add("is-invalid");
        datosNoCoinciden.show(); //Se manda mostrar el modal de error
    }else{ //Se comprueba si los campos clave son iguales
        clave1Input.classList.remove("is-invalid");
        clave1Input.classList.add("is-valid");
        MostrarMensajeError("clave1", "");
        clave2Input.classList.remove("is-invalid");
        clave2Input.classList.add("is-valid");
        MostrarMensajeError("clave2", "");
        flag5=true;
    }

    if (clave1=="" || clave1.trim()==""){ //Se comprueba si el campo clave1 esta vacio //NOTA: .trim elimina los espacios de una cadena
        MostrarMensajeError("clave1", "INGRESE UNA CONTRASEÑA");
        clave1Input.classList.add("is-invalid");
        datosIncompletos.show(); //Se manda mostrar el modal de error
    }else{ //Se comprueba si el campo clave1 esta lleno
        flag6=true;
    }

    if (clave2=="" || clave2.trim()==""){ //Se comprueba si el campo clave2 esta vacio //NOTA: .trim elimina los espacios de una cadena
        MostrarMensajeError("clave2", "INGRESE UNA CONTRASEÑA");
        clave2Input.classList.add("is-invalid");
        datosIncompletos.show(); //Se manda mostrar el modal de error
    }else{ //Se comprueba si el campo clave2 esta lleno
        flag7=true;
    }

    if (document.form1.hobby[0].checked==false && document.form1.hobby[1].checked==false && document.form1.hobby[2].checked==false && document.form1.hobby[3].checked==false && document.form1.hobby[4].checked==false && document.form1.hobby[5].checked==false){ //Se comprueba si los checkboxes no estan marcados
        MostrarMensajeError("hobby", "MARQUE AL MENOS UNA OPCION");
        datosIncompletos.show(); //Se manda mostrar el modal de error
    }else{
        MostrarMensajeError("hobby", "");
        flag8=true;
    //SEGUNDO: SE CONSIGUE LA INFORMACIÓN DE LOS CHECKBOXES
        for (x=0; x<hobbiesLength; x++){
            if (document.form1.hobby[x].checked==true){ //Se comprueba si la casilla x esta marcada
                hobbies+=document.form1.hobby[x].value + ", ";
            }
        }
    }

    //TERCERO: SE MANDA LA INFORMACION AL MODAL QUE DESPLIEGA LOS DATOS INGRESADOS
    if (flag1==true && flag2==true && flag3==true && flag4==true && flag5==true && flag6==true && flag7==true && flag8==true){ //Se comprueba si todos los campos estan contestados
        modal_usuario.innerHTML = "Usuario: " + usuario;
        modal_nombre.innerHTML = "Nombre: " + nombre;
        modal_apellido.innerHTML = "Apellido: " + apellido;
        modal_email.innerHTML = "Email: " + email;
        modal_clave.innerHTML = "Contraseña: " + clave1;
        modal_hobbies.innerHTML = "Hobbies: " + hobbies;
        mostrarDatos.show(); //Se manda mostrar el modal que despliega los datos ingresados
    //CUARTO: SE REINICIAN LOS VALORES EN VACIO DESPUES DE MOSTRAR EL MODAL CON LOS DATOS INGRESADOS
        formulario.usuario.value=formulario.nombre.value=formulario.apellido.value=formulario.email.value=formulario.clave1.value=formulario.clave2.value='';
    //QUINTO: SE QUITA LA CLASE DE LOS INPUT PARA REINICIARLOS A SU MANERA NORMAL
        usuarioInput.classList.remove("is-valid");
        nombreInput.classList.remove("is-valid");
        apellidoInput.classList.remove("is-valid");
        emailInput.classList.remove("is-valid");
        clave1Input.classList.remove("is-valid");
        clave2Input.classList.remove("is-valid");
    //SEXTO: SE DESMARCAN LOS CHECKBOXES PARA REINICIARLOS A SU MANERA NORMAL
        for (x=0; x<hobbiesLength; x++){
            if (document.form1.hobby[x].checked==true){ //Se comprueba si la casilla x esta marcada
                document.form1.hobby[x].checked=false
            }
        }
    }
}