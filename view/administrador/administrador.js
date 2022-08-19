const fila = document.querySelector ('.contenedor-carrousel');
const imagen = document.querySelectorAll('.imagen');

const flechaIzquierda = document.getElementById ('flecha-izquierda');
const flechaDerecha = document.getElementById ('flecha-derecha');

flechaDerecha.addEventListener('click',() => {
fila.scrollLeft += fila.offsetWidth;
} );
flechaIzquierda.addEventListener('click',() => {
    fila.scrollLeft -= fila.offsetWidth;
    } );

    imagen.forEach ((element) => {
        element.addEventListener('mouseenter', (e) => {
            
           const elemento = e.currentTarget;
          
           setTimeout (() => {
                imagen.forEach(element => element.classList.remove('hover'));
                elemento.classList.add('hover');
                
           }, 300);

        });
    });