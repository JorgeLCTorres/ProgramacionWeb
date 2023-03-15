function MostrarMensajeError(claseInput, mensaje){ //Funcion para mostrar el mensaje de error correspondiente en la interfaz
    let clase=document.querySelector(`.${claseInput}`); //Se obtiene el <div> con la clase form-group "claseInput" (el . representa form-group)
    clase.lastElementChild.innerHTML = mensaje; //Se inserta en HTML en el ultimo elemento del <div> el mensaje a mostrar
}

function Subir(){
    var codigo=document.formProductos.codigo.value;             //Se consiguen los valores de entrada del formulario
    var nombre=document.formProductos.nombre.value;             //
    var categoria=document.formProductos.categoria.value;       //
    var precioVenta=document.formProductos.precioVenta.value;   //
    var precioCompra=document.formProductos.precioCompra.value; //
    var codigoInput=document.getElementById("codigo");              //Se consiguen los elementos (inputs) de entrada del formulario
    var nombreInput=document.getElementById("nombre")               //
    var precioVentaInput=document.getElementById("precioVenta")     //
    var precioCompraInput=document.getElementById("precioCompra")   //
    var datosIncompletos = new bootstrap.Modal(document.getElementById('datosIncompletos'));  // Se consigue una referencia al modal
    var mostrarDatos = new bootstrap.Modal(document.getElementById('mostrarDatos'));          //
    var modal_codigo=document.getElementById("modal_codigo");               //Se consiguen los elementos (p) de salida del modal mostrarDatos
    var modal_nombre=document.getElementById("modal_nombre");               //
    var modal_categoria=document.getElementById("modal_categoria");         //
    var modal_precioVenta=document.getElementById("modal_precioVenta");     //
    var modal_precioCompra=document.getElementById("modal_precioCompra");   //
    var flag1=false;    //Se inicializan las banderas que mandaran llamar el modal que despliega los datos ingresados
    var flag2=false;    //
    var flag3=false;    //
    var flag4=false;    //
    var flag5=false;    //
    var formulario=document.getElementById('formProductos');

    //PRIMERO: SE VALIDA QUE TODOS LOS CAMPOS ESTEN CONTESTADOS
    if (codigo=="" || codigo.trim()==""){ //Se comprueba si el campo codigo esta vacio //NOTA: .trim elimina los espacios de una cadena
        MostrarMensajeError("codigo", "INGRESE UN CODIGO");
        codigoInput.classList.add("is-invalid"); //Cambia la clase del Input para pintarlo de color rojo y agregarle un icono de error
        datosIncompletos.show(); //Se manda mostrar el modal de error
    }else{ //Se comprueba si el campo codigo esta lleno
        codigoInput.classList.remove("is-invalid");
        codigoInput.classList.add("is-valid"); //Cambia la clase del Input para pintarlo de color verde y agregarle un icono de correcto
        MostrarMensajeError("codigo", "");
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

    if (categoria=="Seleccionar"){ //Se comprueba si el campo categoria esta en el valor por defecto
        MostrarMensajeError("categoria", "SELECCIONE UNA OPCION");
        datosIncompletos.show(); //Se manda mostrar el modal de error
    }else{ //Se comprueba si el campo categoria esta en otro valor
        MostrarMensajeError("categoria", "");
        flag3=true;
    }

    if (precioVenta==""){ //Se comprueba si el campo precioVenta esta vacio
        MostrarMensajeError("precioVenta", "INGRESE UN PRECIO");
        precioVentaInput.classList.add("is-invalid");
        datosIncompletos.show(); //Se manda mostrar el modal de error
    }else{ //Se comprueba si el campo precioVenta esta lleno
        precioVentaInput.classList.remove("is-invalid");
        precioVentaInput.classList.add("is-valid"); //Cambia la clase del Input para pintarlo de color verde y agregarle un icono de correcto
        MostrarMensajeError("precioVenta", "");
        flag4=true;
    }

    if (precioCompra==""){ //Se comprueba si el campo precioCompra esta vacio
        MostrarMensajeError("precioCompra", "INGRESE UN PRECIO");
        precioCompraInput.classList.add("is-invalid");
        datosIncompletos.show(); //Se manda mostrar el modal de error
    }else{ //Se comprueba si el campo precioCompra esta lleno
        precioCompraInput.classList.remove("is-invalid");
        precioCompraInput.classList.add("is-valid"); //Cambia la clase del Input para pintarlo de color verde y agregarle un icono de correcto
        MostrarMensajeError("precioCompra", "");
        flag5=true;
    }

    //SEGUNDO: SE MANDA LA INFORMACION AL MODAL QUE DESPLIEGA LOS DATOS INGRESADOS
    if (flag1==true && flag2==true && flag3==true && flag4==true && flag5==true){ //Se comprueba si todos los campos estan contestados
        modal_codigo.innerHTML = "Código: " + codigo;
        modal_nombre.innerHTML = "Nombre: " + nombre;
        modal_categoria.innerHTML = "Categoría: " + categoria;
        modal_precioVenta.innerHTML = "Precio de venta: " + precioVenta;
        modal_precioCompra.innerHTML = "Precio de compra: " + precioCompra;
        mostrarDatos.show(); //Se manda mostrar el modal que despliega los datos ingresados
    //TERCERO: SE REINICIAN LOS VALORES EN VACIO DESPUES DE MOSTRAR EL MODAL CON LOS DATOS INGRESADOS
        formulario.codigo.value=formulario.nombre.value=formulario.precioVenta.value=formulario.precioCompra.value='';
        formulario.categoria.value="Seleccionar";
    //CUARTO: SE QUITA LA CLASE DE LOS INPUT PARA REINICIARLOS A SU MANERA NORMAL
        codigoInput.classList.remove("is-valid");
        nombreInput.classList.remove("is-valid");
        precioVentaInput.classList.remove("is-valid");
        precioCompraInput.classList.remove("is-valid");
    }
}