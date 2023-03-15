//Se construye un arreglo con la información de todos los productos
const menu = [
    {
      codigo: 1,
      nombre: "buttermilk pancakes",
      categoria: "breakfast",
      precio: 15.99,
      desc: `I'm baby woke mlkshk wolf bitters live-edge blue bottle, hammock freegan copper mug whatever cold-pressed `,
    },
    {
      codigo: 2,
      nombre: "diner double",
      categoria: "lunch",
      precio: 13.99,
      desc: `vaporware iPhone mumblecore selvage raw denim slow-carb leggings gochujang helvetica man braid jianbing. Marfa thundercats `,
    },
    {
      codigo: 3,
      nombre: "godzilla milkshake",
      categoria: "shakes",
      precio: 6.99,
      desc: `ombucha chillwave fanny pack 3 wolf moon street art photo booth before they sold out organic viral.`,
    },
    {
      codigo: 4,
      nombre: "country delight",
      categoria: "breakfast",
      precio: 20.99,
      desc: `Shabby chic keffiyeh neutra snackwave pork belly shoreditch. Prism austin mlkshk truffaut, `,
    },
    {
      codigo: 5,
      nombre: "egg attack",
      categoria: "lunch",
      precio: 22.99,
      desc: `franzen vegan pabst bicycle rights kickstarter pinterest meditation farm-to-table 90's pop-up `,
    },
    {
      codigo: 6,
      nombre: "oreo dream",
      categoria: "shakes",
      precio: 18.99,
      desc: `Portland chicharrones ethical edison bulb, palo santo craft beer chia heirloom iPhone everyday`,
    },
    {
      codigo: 7,
      nombre: "bacon overflow",
      categoria: "breakfast",
      precio: 8.99,
      desc: `carry jianbing normcore freegan. Viral single-origin coffee live-edge, pork belly cloud bread iceland put a bird `,
    },
    {
      codigo: 8,
      nombre: "american classic",
      categoria: "lunch",
      precio: 12.99,
      desc: `on it tumblr kickstarter thundercats migas everyday carry squid palo santo leggings. Food truck truffaut  `,
    },
    {
      codigo: 9,
      nombre: "quarantine buddy",
      categoria: "shakes",
      precio: 16.99,
      desc: `skateboard fam synth authentic semiotics. Live-edge lyft af, edison bulb yuccie crucifix microdosing.`,
    },
    {
      codigo: 10,
      nombre: "bison steak",
      categoria: "dinner",
      precio: 22.99,
      desc: `skateboard fam synth authentic semiotics. Live-edge lyft af, edison bulb yuccie crucifix microdosing.`,
    },
  ];
  
  function MostrarDatos() {
    var contenido = document.querySelector("#contenido"); //Se obtiene el apartado con la clase contenido
    let datos = menu.map(function (item) { //Se itera el arreglo creado anteriormente

        //Se retorna la estructura HTML con los datos de los productos contenido en el arreglo
       return `<tr">
                <td>${item.codigo}</td>
                <td>${item.nombre}</td>
                <td>${item.categoria}</td>
                <td>${item.precio}</td>
                <td>${item.desc}</td>
            </tr>`;
    });
    datos = datos.join(""); //Se retorna el arreglo como un string y se le quita el separador de la coma (al pasar el parametro "")
  
    contenido.innerHTML = datos; //Se coloca la información en el apartado con la clase contenido
  }