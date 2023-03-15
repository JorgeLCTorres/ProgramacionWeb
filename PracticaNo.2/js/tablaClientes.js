//Se construye un arreglo con la información de todos los clientes
const menu = [
    {
      id: 1,
      nombre: "Mauricio",
      apellidoP: "Hernandez",
      apellidoM: "Cepeda",
      email: "mauriciohc02@gmail.com",
      telefono: "8347459831",
      direccion: "Calle Veracruz #973",
      rfc: `MH65Y3U28PEU`,
      categoria: "Sin categoría",
    },
    {
      id: 2,
      nombre: "Daniel Eduardo",
      apellidoP: "Macías",
      apellidoM: "Estrada",
      email: "danma@gmail.com",
      telefono: "8341597862",
      direccion: "Calle Berriozabal #879",
      rfc: `DA783GS39RGS`,
      categoria: "Top",
    },
    {
      id: 3,
      nombre: "Melany Karyme",
      apellidoP: "Torres",
      apellidoM: "Perez",
      email: "meltorp@gmail.com",
      telefono: "8345793014",
      direccion: "Calle Sinaloa #312",
      rfc: `MK958FG14RHK`,
      categoria: "Potencial",
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