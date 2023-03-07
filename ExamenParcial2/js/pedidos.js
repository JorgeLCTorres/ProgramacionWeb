//Se declara un arreglo con todos los productos que se mostraran
const menu = [
    {
      usuario: "Pepe3183",
      nombre: "Pepe",
      producto: "Gorra Nike Sportswear Heritage86",
      desc: `La gorra Nike Sportswear Heritage86 Futura Washed te da protección y resalta ese look deportivo deslavado que buscas. Esta gorra con visera curveada presenta el logo Swoosh, mundialmente reconocido, bordado al frente para que lo portes con orgullo y un ajuste ideal con un cierre de correa y hebilla.`,
      precio: 549,
      fecha: "7 de marzo",
    },
    {
        usuario: "1534Raul",
        nombre: "Raul",
        producto: "Gorra Nike Sportswear Classic 99",
        desc: `Muéstrate con la última tendencia en el estilo urbano con esta Gorra Casual Nike Sportswear Classic 99, diseñada para que estés cómodo y protegido 24/7. Te fascinará su ajuste elástico.`,
        precio: 649,
        fecha: "8 de marzo",
    },
    {
        usuario: "135Maria",
        nombre: "Maria",
        producto: "Gorra adidas Baseball",
        desc: `Porta un gran estilo en la ciudad con la Gorra adidas Baseball, este accesorio es ideal para combinarlo con cualquier outfit casual o deportivo que tengas en mente.`,
        precio: 499,
        fecha: "9 de marzo",
    },
    {
        usuario: "Jose1654",
        nombre: "Jose",
        producto: "Guantes adidas Predator",
        desc: `Deja todo en la cancha al usar los Guantes adidas Predator, con este par de la marca alemana tendrás una total confianza bajo los tres palos. Son parte de una nueva colección que combinará de manera perfecta con tus tachones favoritos.`,
        precio: 1199,
        fecha: "10 de marzo",
    },
    {
        usuario: "Dolores3415",
        nombre: "Dolores",
        producto: "Guantes Rinat Fenix Superior",
        desc: `Mantén tu arco en cero usando los Guantes Rinat Fenix Superior, este accesorio cuenta con un modelo técnico y cómodo que se ajustará de manera perfecta a tu mano, su corte ultraligero y flexible se siente reforzado generando una seguridad de alto nivel.`,
        precio: 649,
        fecha: "11 de marzo",
    },
    {
        usuario: "Jorge188",
        nombre: "Jorge",
        producto: "Balón de Fútbol adidas Mundial Qatar 2022 Pro",
        desc: `Se vivirá algo totalmente nuevo, los amantes del fútbol disfrutarán de la Copa Mundial en vísperas de Navidad. El Balón de Fútbol adidas Mundial Qatar 2022 Pro esta listo para rodar a partir del 21 de noviembre del presente año.`,
        precio: 4099,
        fecha: "12 de marzo",
    },
    {
        usuario: "Luis2484",
        nombre: "Luis",
        producto: "Balón de Fútbol adidas Al Rihla Club",
        desc: `Prepárate para esta nueva Copa del Mundo con el Balón de Fútbol adidas Al Rihla Club que te brindará horas de diversión en todas las canchas que visites.`,
        precio: 455,
        fecha: "13 de marzo",
    },
    {
        usuario: "38433Daniel",
        nombre: "Daniel",
        producto: "Lentes polarizados Goodr Phoenix",
        desc: `Los LENTES PHOENIX de GOODR son ideales para correr y realizar tus actividades al aire libre sin perder el estilo, ya que su diseño es moderno. Presentan un recubrimiento especial de agarre que evita el deslizamiento por el sudor.`,
        precio: 945,
        fecha: "14 de marzo",
    },
    {
        usuario: "4568Josue",
        nombre: "Josue",
        producto: "Lentes polarizados Goodr Midnight Ramble",
        desc: `Creados para el running, los Lentes polarizados Goodr Midnight Ramble son un accesorio que deben ser parte de tu look para correr. Estos lentes aportan estilo sofisticado y una visibilidad clara.`,
        precio: 949,
        fecha: "15 de marzo",
    },
    {
        usuario: "1534Daniela",
        nombre: "Daniela",
        producto: "Mochila adidas Tiro 23",
        desc: `La Mochila adidas Tiro 23 es una perfecta elección para tu día a día, este accesorio de la marca alemana será tu favorito. Es ideal para que lleves tus tachones, cambio de ropa, bebida favorita entre muchas otras cosas al terreno de juego.`,
        precio: 999,
        fecha: "16 de marzo",
    },
];

//Evento que cuando carga por completo la página manda llamar la función
window.addEventListener('load', function() {
    var contenido = document.querySelector("#contenido"); //Se obtiene el apartado con la clase contenido
    let datos = menu.map(function (item) { //Se itera el arreglo creado anteriormente

        //Se retorna la estructura HTML con los datos de los productos contenido en el arreglo
       return `<tr">
                <td>${item.usuario}</td>
                <td>${item.nombre}</td>
                <td>${item.producto}</td>
                <td>${item.desc}</td>
                <td>${item.precio}</td>
                <td>${item.fecha}</td>
            </tr>`;
    });
    datos = datos.join(""); //Se retorna el arreglo como un string y se le quita el separador de la coma (al pasar el parametro "")
  
    contenido.innerHTML = datos; //Se coloca la información en el apartado con la clase contenido
});