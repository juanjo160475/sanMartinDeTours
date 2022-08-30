/*llamada a funciones */
const imagen = document.querySelectorAll('.imagen');
const fila = document.getElementById('carrousel-imagenes');
const filaSedes = document.getElementById('carrousel-sedes');
const filaCursos = document.getElementById('carrousel-cursos');
const flechaIzquierda = document.getElementById('flecha-izquierda');
const flechaDerecha = document.getElementById('flecha-derecha');
const flechaIzSede = document.getElementById('flecha-izquierda-sede');
const flechaDerSede = document.getElementById('flecha-derecha-sede');
const flechaIzCurso = document.getElementById('flecha-izquierda-curso');
const flechaDerCurso = document.getElementById('flecha-derecha-curso');

initFlecha (flechaIzquierda,flechaDerecha,fila);
initFlecha (flechaIzSede,flechaDerSede,filaSedes);
initFlecha (flechaIzCurso,flechaDerCurso,filaCursos);
const btnEliminar = document.querySelectorAll('.btn-edicion img');


/* listener de botones flechas*/ 
function initFlecha(fIzquierda, fDerecha,  fil) {

fDerecha.addEventListener('click', () => {
    fil.scrollLeft += fil.offsetWidth;
});
fIzquierda.addEventListener('click', () => {
    fil.scrollLeft -= fil.offsetWidth;
});

}
/* inicio de variables */
function inicioVariables() {
}

imagen.forEach((element) => {

    element.addEventListener('mouseenter', (e) => {

        const elemento = e.currentTarget;

        setTimeout(() => {
            imagen.forEach(element => element.classList.remove('hover'));
            elemento.classList.add('hover');


        }, 300);

    });
});



function eliminar(nombreImg, idImagen, accion) {
    $('#mostrar-nom-foto').val(nombreImg);
    $('#id-imagen').val(idImagen);
    $('form').attr("action", accion);

}

function editarSede(id, nombre_sede, direccion, telefono) {
    $('#id').val(id);
    $('#nombre').val(nombre_sede);
    $('#direccion').val(direccion);
    $('#telefono').val(telefono);

}

function editarCurso(id, id_imagen, id_sede, titulo, descripcion, fechaInicio, fechafinal,sedecheck) {
    $('#id-curso').val(id);
    $('#imagen').val(id_imagen);
    $('#'+id_imagen).prop('checked', true);
    $('#sede').val(id_sede);
    $('#'+id_sede).prop('checked', true);
    $('#titulo').val(titulo);
    $('#descripcion').val(descripcion);
    $('#inicio').val(fechaInicio);
    $('#final').val(fechafinal);

}


// seleccion de imagenes y sedes para los cursos

document.getElementById('botonAgregar').addEventListener('click', function () {

    let sedeElegida = document.querySelector('input[name="sede"]:checked');
    let imagenElegida = document.querySelector('input[name="imagen"]:checked');
    if (sedeElegida) {

        document.getElementById('sede').value = sedeElegida.value;
    } else {
        alert('Falta agregar sede');
    }

    if (imagenElegida) {

        document.getElementById('imagen').value = imagenElegida.value;
    } else {
        alert('Falta agreger una imagen');
    }
});
    
    
   

