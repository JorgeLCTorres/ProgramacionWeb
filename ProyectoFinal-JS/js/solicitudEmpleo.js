//Se selecciona el formulario con la clase needs-validation
const forms = document.querySelectorAll('.needs-validation');

const loaderOverlay = document.getElementById("loader-overlay");    //Inicialización de alertas

var datosIncompletos = new bootstrap.Modal(document.getElementById('datosIncompletos'));  // Se consigue una referencia al modal

const formulario = document.getElementById('form1');
const inputs = formulario.querySelectorAll('input');

const radios = formulario.querySelectorAll('radio');
const selects = formulario.querySelectorAll('select');
// Validación del formulario 
Array.from(forms).forEach(form => { //Se recorre el arreglo de formulario
    form.addEventListener('submit', event => {
        
        if (!form.checkValidity()) { //Se valida que los campos esten vacios
            event.preventDefault() //No se recarga la pagina
            event.stopPropagation() //Se colorean en rojo los campos
            datosIncompletos.show(); //Se manda mostrar el modal de error
        
        }else{
            event.preventDefault()
            loaderOverlay.classList.remove("d-none"); //Se muestra el counter
            
            for (let i = 0; i < inputs.length; i++) {
                inputs[i].setAttribute('readonly', true);
            }

            for (let i = 0; i < radios.length; i++) {
                radios[i].setAttribute('disabled', "disabled");
            }

            for (let i = 0; i < selects.length; i++) {
                selects[i].setAttribute('disabled', "disabled");
            }

            setTimeout(function() { //Se oculta el counter
              loaderOverlay.classList.add("d-none");
            }, 3000);

            
            const loaderJS = document.getElementById("descargar"); //Se muestra botón para descargar el JSON
            loaderJS.style.display = "inline-block";

            const loaderBtn = document.getElementById("subir"); //Se oculta botón de subir
            loaderBtn.style.display = "none";

            }
        form.classList.add('was-validated')
        }, false)
    })

function Cancelar(){
    location.href="solicitudEmpleo.html"
}



$(document).ready(function () {
  
    $("#descargar").click(function () {
      get_Datos_form();
    });
  
  
  
  });
  
  function get_Datos_form() {
    const form = document.querySelector('#form1');
    const formElements = form.querySelectorAll('input, date, number, textarea, radio, checkbox');
    const formData = {};
  
    formElements.forEach(element => {
      const name = element.name;
      const value = element.value;
      formData[name] = value;
    });
  
    console.log(formData);
  
    var jsonString = JSON.stringify(formData, null, 2);
  
    console.log(jsonString);
  
    setTimeout(function () {
      var newWindow = window.open();
      newWindow.document.write("<pre><code>" + jsonString + "</code></pre>");
  
      const downloadLink = newWindow.document.createElement('a');
      downloadLink.href = 'data:text/json;charset=utf-8,' + encodeURIComponent(jsonString);
      downloadLink.download = 'formulario.json';
      downloadLink.style.display = 'none';
      newWindow.document.body.appendChild(downloadLink);
      downloadLink.click();
      newWindow.document.body.removeChild(downloadLink);
    }, 4000);
  
  }
  
  