const fila = document.querySelector('.contenedor-carrousel');
const imagen = document.querySelectorAll('.imagen');

const flechaIzquierda = document.getElementById('flecha-izquierda');
const flechaDerecha = document.getElementById('flecha-derecha');
const btnEliminar = document.querySelectorAll('.btn-edicion img');



flechaDerecha.addEventListener('click', () => {
    fila.scrollLeft += fila.offsetWidth;
});
flechaIzquierda.addEventListener('click', () => {
    fila.scrollLeft -= fila.offsetWidth;
});



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
    
    
   

