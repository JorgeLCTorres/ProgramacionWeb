function MostrarMensajeError(claseInput, mensaje){ //Funcion para mostrar el mensaje de error correspondiente en la interfaz
    let clase=document.querySelector(`.${claseInput}`); //Se obtiene el <div> con la clase form-group "claseInput" (el . representa form-group)
    clase.lastElementChild.innerHTML = mensaje; //Se inserta en HTML en el ultimo elemento del <div> el mensaje a mostrar
}

function Guardar(){
    var id=document.formAgregarProducto.id.value;                   //Se consiguen los valores de entrada del formulario
    var nombre=document.formAgregarProducto.nombre.value;           //
    var descripcion=document.formAgregarProducto.descripcion.value; //
    var precio=document.formAgregarProducto.precio.value;           //
    var fecha=document.formAgregarProducto.fecha.value;             //
    var notas=document.formAgregarProducto.notas.value;             //
    var idInput=document.getElementById("id");                  //Se consiguen los elementos (inputs) de entrada del formulario
    var nombreInput=document.getElementById("nombre")           //
    var descripcionInput=document.getElementById("descripcion") //
    var precioInput=document.getElementById("precio")           //
    var fechaInput=document.getElementById("fecha")             //
    var notasInput=document.getElementById("notas")             //
    var datosIncompletos = new bootstrap.Modal(document.getElementById('datosIncompletos'));  // Se consigue una referencia al modal
    var mostrarDatos = new bootstrap.Modal(document.getElementById('mostrarDatos'));          //
    var modal_id=document.getElementById("modal_id");                   //Se consiguen los elementos (p) de salida del modal mostrarDatos
    var modal_nombre=document.getElementById("modal_nombre");           //
    var modal_descripcion=document.getElementById("modal_descripcion"); //
    var modal_precio=document.getElementById("modal_precio");           //
    var modal_fecha=document.getElementById("modal_fecha");             //
    var modal_notas=document.getElementById("modal_notas");             //
    var flag1=false;    //Se inicializan las banderas que mandaran llamar el modal que despliega los datos ingresados
    var flag2=false;    //
    var flag3=false;    //
    var flag4=false;    //
    var flag5=false;    //
    var flag6=false;    //
    var formulario=document.getElementById('formAgregarProducto');

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

    if (descripcion=="" || descripcion.trim()==""){ //Se comprueba si el campo descripcion esta en el valor por defecto
        MostrarMensajeError("descripcion", "INGRESE UNA DESCRIPCIÓN");
        descripcionInput.classList.add("is-invalid");
        datosIncompletos.show(); //Se manda mostrar el modal de error
    }else{ //Se comprueba si el campo descripcion esta en otro valor
        descripcionInput.classList.remove("is-invalid");
        descripcionInput.classList.add("is-valid"); //Cambia la clase del Input para pintarlo de color verde y agregarle un icono de correcto
        MostrarMensajeError("descripcion", "");
        flag3=true;
    }

    if (precio==""){ //Se comprueba si el campo precio esta vacio
        MostrarMensajeError("precio", "INGRESE UN PRECIO");
        precioInput.classList.add("is-invalid");
        datosIncompletos.show(); //Se manda mostrar el modal de error
    }else{ //Se comprueba si el campo precio esta lleno
        precioInput.classList.remove("is-invalid");
        precioInput.classList.add("is-valid"); //Cambia la clase del Input para pintarlo de color verde y agregarle un icono de correcto
        MostrarMensajeError("precio", "");
        flag4=true;
    }

    if (fecha==""){ //Se comprueba si el campo fecha esta vacio
        MostrarMensajeError("fecha", "INGRESE UNA FECHA");
        fechaInput.classList.add("is-invalid");
        datosIncompletos.show(); //Se manda mostrar el modal de error
    }else{ //Se comprueba si el campo fecha esta lleno
        fechaInput.classList.remove("is-invalid");
        fechaInput.classList.add("is-valid"); //Cambia la clase del Input para pintarlo de color verde y agregarle un icono de correcto
        MostrarMensajeError("fecha", "");
        flag5=true;
    }

    if (notas=="" || notas.trim()==""){ //Se comprueba si el campo notas esta vacio
        MostrarMensajeError("notas", "INGRESE UNA NOTA");
        notasInput.classList.add("is-invalid");
        datosIncompletos.show(); //Se manda mostrar el modal de error
    }else{ //Se comprueba si el campo fecha esta lleno
        notasInput.classList.remove("is-invalid");
        notasInput.classList.add("is-valid"); //Cambia la clase del Input para pintarlo de color verde y agregarle un icono de correcto
        MostrarMensajeError("notas", "");
        flag6=true;
    }

    //SEGUNDO: SE MANDA LA INFORMACION AL MODAL QUE DESPLIEGA LOS DATOS INGRESADOS
    if (flag1==true && flag2==true && flag3==true && flag4==true && flag5==true && flag6==true){ //Se comprueba si todos los campos estan contestados
        modal_id.innerHTML = "Id: " + id;
        modal_nombre.innerHTML = "Nombre: " + nombre;
        modal_descripcion.innerHTML = "Descripción: " + descripcion;
        modal_precio.innerHTML = "Precio: " + precio;
        modal_fecha.innerHTML = "Fecha de captura: " + fecha;
        modal_notas.innerHTML = "Notas: " + notas;
        mostrarDatos.show(); //Se manda mostrar el modal que despliega los datos ingresados
    //TERCERO: SE REINICIAN LOS VALORES EN VACIO DESPUES DE MOSTRAR EL MODAL CON LOS DATOS INGRESADOS
        formulario.id.value=formulario.nombre.value=formulario.descripcion.value=formulario.precio.value=formulario.fecha.value=formulario.notas.value='';
    //CUARTO: SE QUITA LA CLASE DE LOS INPUT PARA REINICIARLOS A SU MANERA NORMAL
        idInput.classList.remove("is-valid");
        nombreInput.classList.remove("is-valid");
        descripcionInput.classList.remove("is-valid");
        precioInput.classList.remove("is-valid");
        fechaInput.classList.remove("is-valid");
        notasInput.classList.remove("is-valid");
    }
}