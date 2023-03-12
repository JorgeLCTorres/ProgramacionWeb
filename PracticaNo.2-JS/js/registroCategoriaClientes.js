function MostrarMensajeError(claseInput, mensaje){ //Funcion para mostrar el mensaje de error correspondiente en la interfaz
    let clase=document.querySelector(`.${claseInput}`); //Se obtiene el <div> con la clase form-group "claseInput" (el . representa form-group)
    clase.lastElementChild.innerHTML = mensaje; //Se inserta en HTML en el ultimo elemento del <div> el mensaje a mostrar
}

function Subir(){
    var id=document.form1.id.value;                             //Se consiguen los valores de entrada del formulario
    var nombre=document.form1.nombre.value;                     //
    var datosIncompletos = new bootstrap.Modal(document.getElementById('datosIncompletos'));  // Se consigue una referencia al modal
    var mostrarDatos = new bootstrap.Modal(document.getElementById('mostrarDatos'));          //
    var modal_id=document.getElementById("modal_id");                           //Se consiguen los elementos (p) de salida del modal mostrarDatos
    var modal_nombre=document.getElementById("modal_nombre");                   //
    var idInput=document.getElementById("id");                          //Se consiguen los elementos (inputs) de entrada del formulario
    var nombreInput=document.getElementById("nombre")                   //
    var flag1=false;    //Se inicializan las banderas que mandaran llamar el modal que despliega los datos ingresados
    var flag2=false;    //
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

    //TERCERO: SE MANDA LA INFORMACION AL MODAL QUE DESPLIEGA LOS DATOS INGRESADOS
    if (flag1==true && flag2==true){ //Se comprueba si todos los campos estan contestados
        modal_id.innerHTML = "Id: " + id;
        modal_nombre.innerHTML = "Nombre: " + nombre;
        mostrarDatos.show(); //Se manda mostrar el modal que despliega los datos ingresados
    //CUARTO: SE REINICIAN LOS VALORES EN VACIO DESPUES DE MOSTRAR EL MODAL CON LOS DATOS INGRESADOS
        formulario.id.value=formulario.nombre.value='';
    //QUINTO: SE QUITA LA CLASE DE LOS INPUT PARA REINICIARLOS A SU MANERA NORMAL
        idInput.classList.remove("is-valid");
        nombreInput.classList.remove("is-valid");
    }
}