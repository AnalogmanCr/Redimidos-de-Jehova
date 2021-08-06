const etiquetas = [ {nombre:'Inicio',file:'index'},
{nombre:'¿Quienes Somos?',file:'quiensomos'},
{nombre:'Servicios Online',file:'serviciosonline'},
{nombre:'Podcast',file:'potcast'},
{nombre:'Galería',file:'galeria'},
{nombre:'Reflexiones',file:'reflex'},
{nombre:'Noticias',file:'noticias'},
{nombre:'Academias',file:'academias'},
{nombre:'Música',file:'musica'},
{nombre:'Contáctanos',file:'contacto'},] 
window.addEventListener('DOMContentLoaded',(e)=>{
    etiquetas.forEach(e => {
        $('#list').append(`<li class="nav-item"><a class="nav-link"
         href=" ${window.location,e.file}.html">${e.nombre}</a>
         </li>`)
    });
}) 
