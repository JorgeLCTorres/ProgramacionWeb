//Element.getBoundingClientRect(), El método devuelve el tamaño de un elemento y su posicion relativa a la ventana grafica
//pagaYOffset: es una propiedad de ventana de solo lectura que devuelve el numero de pixeles que el documento se  ha desplazado verticalmente.
//slice ectrae una seccion de ua cadena sin modificar la cadena original
//offsetTop: Un numero que representa la posicion superior del elemento, en pixeles


//****set date ******
//select span 
//document.getElementById: Devuelve una referencia al elemento por su ID

const date = document.getElementById("date");
date.innerHTML = new Date().getFullYear();

//***close links*****
//document.querySelector Devuelve el primer elemento del documento que coincida con el grupo especifico de selectores.

const navToggle = document.querySelector(".nav-toggle");
const linksContainer = document.querySelector(".links-container");
const links = document.querySelector(".links");

navToggle.addEventListener("click", function(){
    //El metodo Element.getBoundingClientRect() devuelve el tamaño de un elemento y su posicion relativa respecto a  la ventana de visualizacion (viewport).
    const linkHeight = links.getBoundingClientRect().height;
    const containerHeight = linksContainer.getBoundingClientRect().height;
    if (containerHeight ===0){
        linksContainer.getElementsByClassName.height = `${linkHeight}px`;
    }else{
        linksContainer.getElementsByClassName.height =0;
    }
});

//****fixed navbar**** 
const navbar = document.getElementById("nav");
const topLink = document.querySelector(".top-link");

//scroll
window.addEventListener("scroll", function(){
    const scrollHeight = window.pageYOffset;
    const navHeight = navbar.getBoundingClientRect().height;
    if (scrollHeight > navHeight){
        navbar.classList.add("fixed-nav");
    }else{
        navbar.classList.remove("fixed-nav");
    }

    //satup back to top link

    if(scrollHeight > 500){
        console.log("helo");
        topLink.classList.add("show-link");
    }else{
        topLink.classList.remove("show-link");
    }
});

//*****smooyh scroll*****
//select links

const scrollLinks = document.querySelectorAll(".scroll-link")
scrollLinks.forEach((link) =>{
    link.addEventListener("click", (e)=>{
        //prevent default
        e.preventDefault();
        //navigate to specific spot
        const id=e.currentTarget.getAttribute("href").slice(1);
        const element = document.getElementById(id);
        const navHeight = navbar.getBoundingClientRect().height;
        const containerHeight = linksContainer.getBoundingClientRect().height;
        const fixedNav = navbar.classList.contains("fixed-nav");
        let position = element.offsetTop - navHeight;

        if (!fixedNav){
            position = position - navHeight;
        }
        if (navHeight > 82){
            position = position + containerHeight;
        }
        window.scrollTo({
            left: 0,
            top: position,
        });
        //close
        linksContainer.style.height=0;
    });
});