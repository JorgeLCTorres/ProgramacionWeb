//Se construye un arreglo con la información de todos los proveedores
const menu = [
    {
      id: 1,
      nombre: "María",
      apellidoP: "Hernandez",
      apellidoM: "Mendiola",
      email: "marimend@gmail.com",
      telefono: "8347369104",
      direccion: "Calle Mier #634",
      rfc: `MM59D2Y20UMU`,
      categoria: "Nacional",
    },
    {
      id: 2,
      nombre: "Jose Eduardo",
      apellidoP: "Torres",
      apellidoM: "Gatas",
      email: "josedu@gmail.com",
      telefono: "8341034708",
      direccion: "Calle Nuevo León #137",
      rfc: `JE697UY12RYI`,
      categoria: "Local",
    },
    {
      id: 3,
      nombre: "Maribel",
      apellidoP: "Pecina",
      apellidoM: "Perez",
      email: "maripeci@gmail.com",
      telefono: "8347580240",
      direccion: "Calle Abasolo #974",
      rfc: `MP124JG79INB`,
      categoria: "Internacional",
    },
  ];
  
//Evento que cuando carga por completo la página manda llamar la función
window.addEventListener('load', function() {
    var contenido = document.querySelector("#contenido"); //Se obtiene el apartado con la clase contenido
    let datos = menu.map(function (item) { //Se itera el arreglo creado anteriormente

        //Se retorna la estructura HTML con los datos de los productos contenido en el arreglo
       return `<tr">
                <td>${item.id}</td>
                <td>${item.nombre}</td>
                <td>${item.apellidoP}</td>
                <td>${item.apellidoM}</td>
                <td>${item.email}</td>
                <td>${item.telefono}</td>
                <td>${item.direccion}</td>
                <td>${item.rfc}</td>
                <td>${item.categoria}</td>
            </tr>`;
    });
    datos = datos.join(""); //Se retorna el arreglo como un string y se le quita el separador de la coma (al pasar el parametro "")
  
    contenido.innerHTML = datos; //Se coloca la información en el apartado con la clase contenido
});