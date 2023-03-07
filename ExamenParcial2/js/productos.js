//Se declara un arreglo con todos los productos que se mostraran
const menu = [
    {
      id: 1,
      title: "Gorra Nike Sportswear Heritage86",
      category: "Gorras",
      price: 549,
      img: "dist/img/1.jpg",
      desc: `La gorra Nike Sportswear Heritage86 Futura Washed te da protección y resalta ese look deportivo deslavado que buscas. Esta gorra con visera curveada presenta el logo Swoosh, mundialmente reconocido, bordado al frente para que lo portes con orgullo y un ajuste ideal con un cierre de correa y hebilla.`,
    },
    {
      id: 2,
      title: "Gorra Nike Sportswear Classic 99",
      category: "Gorras",
      price: 649,
      img: "dist/img/2.jpg",
      desc: `Muéstrate con la última tendencia en el estilo urbano con esta Gorra Casual Nike Sportswear Classic 99, diseñada para que estés cómodo y protegido 24/7. Te fascinará su ajuste elástico.`,
    },
    {
      id: 3,
      title: "Gorra adidas Baseball",
      category: "Gorras",
      price: 499,
      img: "dist/img/3.jpg",
      desc: `Porta un gran estilo en la ciudad con la Gorra adidas Baseball, este accesorio es ideal para combinarlo con cualquier outfit casual o deportivo que tengas en mente.`,
    },
    {
      id: 4,
      title: "Guantes adidas Predator",
      category: "Guantes",
      price: 1199,
      img: "dist/img/4.jpg",
      desc: `Deja todo en la cancha al usar los Guantes adidas Predator, con este par de la marca alemana tendrás una total confianza bajo los tres palos. Son parte de una nueva colección que combinará de manera perfecta con tus tachones favoritos.`,
    },
    {
      id: 5,
      title: "Guantes Rinat Fenix Superior",
      category: "Guantes",
      price: 649,
      img: "dist/img/5.jpg",
      desc: `Mantén tu arco en cero usando los Guantes Rinat Fenix Superior, este accesorio cuenta con un modelo técnico y cómodo que se ajustará de manera perfecta a tu mano, su corte ultraligero y flexible se siente reforzado generando una seguridad de alto nivel.`,
    },
    {
      id: 6,
      title: "Balón de Fútbol adidas Mundial Qatar 2022 Pro",
      category: "Balones",
      price: 4099,
      img: "dist/img/6.jpg",
      desc: `Se vivirá algo totalmente nuevo, los amantes del fútbol disfrutarán de la Copa Mundial en vísperas de Navidad. El Balón de Fútbol adidas Mundial Qatar 2022 Pro esta listo para rodar a partir del 21 de noviembre del presente año.`,
    },
    {
      id: 7,
      title: "Balón de Fútbol adidas Al Rihla Club",
      category: "Balones",
      price: 455,
      img: "dist/img/7.jpg",
      desc: `Prepárate para esta nueva Copa del Mundo con el Balón de Fútbol adidas Al Rihla Club que te brindará horas de diversión en todas las canchas que visites.`,
    },
    {
      id: 8,
      title: "Lentes polarizados Goodr Phoenix",
      category: "Lentes",
      price: 949,
      img: "dist/img/8.png",
      desc: `Los LENTES PHOENIX de GOODR son ideales para correr y realizar tus actividades al aire libre sin perder el estilo, ya que su diseño es moderno. Presentan un recubrimiento especial de agarre que evita el deslizamiento por el sudor.`,
    },
    {
      id: 9,
      title: "Lentes polarizados Goodr Midnight Ramble",
      category: "Lentes",
      price: 949,
      img: "dist/img/9.png",
      desc: `Creados para el running, los Lentes polarizados Goodr Midnight Ramble son un accesorio que deben ser parte de tu look para correr. Estos lentes aportan estilo sofisticado y una visibilidad clara.`,
    },
    {
      id: 10,
      title: "Mochila adidas Tiro 23",
      category: "Mochilas",
      price: 999,
      img: "dist/img/10.jpg",
      desc: `La Mochila adidas Tiro 23 es una perfecta elección para tu día a día, este accesorio de la marca alemana será tu favorito. Es ideal para que lleves tus tachones, cambio de ropa, bebida favorita entre muchas otras cosas al terreno de juego.`,
    },
  ];
  
  const sectionCenter = document.querySelector(".apartado"); //Se obtiene el apartado con la clase contenido
  const btnContainer = document.querySelector(".filtrado-btn"); //Se obtiene el apartado con la clase botones
  
  
  // mostrar todos los productos al cargar la página
  //NOTA: "DOMContentLoaded" permite conocer el momento en el que todos los elementos del DOM, es decir, los elementos HTML de un proyecto, están cargados
  window.addEventListener("DOMContentLoaded", function () {
    diplayMenuItems(menu);
    displayMenuButtons();
  });
  
  //Items de productos
  function diplayMenuItems(menuItems) {
    let displayMenu = menuItems.map(function (item) { //Se realiza una iteracion del arreglo para recorrerlo
      //Se crea la estructura HTML que se insertara en el documento de la pagina
      return `<div class="col">
                <div class="card shadow-sm">
                <img src=${item.img} alt="" width="100%" height="225" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text class ="tituloTarjetas" x="50%" y="50%" fill="#eceeef" dy=".3em">${item.title}</text>
                    <div class="card-body">
                    <p class="card-text" >${item.desc}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                        <p class="card-text" >$${item.price}</p>
                        </div>
                    </div>
                    </div>
                </div>
                </div>`;
    });
    displayMenu = displayMenu.join(""); //Se convierte el arreglo en un string en el que se le quitan las , (con el parametro "")
  
    sectionCenter.innerHTML = displayMenu; //Se inserta el contenido en el documento HTML en el apartado de contenido
  }
  
  //Opciones de botones
  function displayMenuButtons() {
    const categories = menu.reduce(
      function (values, item) {
        if (!values.includes(item.category)) {
          values.push(item.category);
        }
        return values;
      },
      ["Todo"] //Se crea el boton predeterminado que contiene todos los productos
    );
    //constructor del boton con el nombre de la categoría de los items del array
    const categoryBtns = categories
      .map(function (category) {
        //Se crea la estructura HTML que se insertara en el documento de la pagina
        return `<button type="button" class="filter-btn" data-id=${category}>
            ${category}
          </button>`;
      })
      .join("");
  
    btnContainer.innerHTML = categoryBtns;
    const filterBtns = btnContainer.querySelectorAll(".filter-btn");
    console.log(filterBtns);
  
    filterBtns.forEach(function (btn) {
      btn.addEventListener("click", function (e) {
        const category = e.currentTarget.dataset.id;
        const menuCategory = menu.filter(function (menuItem) {
          if (menuItem.category === category) {
            return menuItem;
          }
        });
        if (category === "Todo") {
          diplayMenuItems(menu);
        } else {
          diplayMenuItems(menuCategory);
        }
      });
    });
  }