<script>
        // se oculta el header
        const cabecera = document.body.querySelector('#mainNav');
        cabecera.style.display = 'none' 
        
</script>

<?php 
// probar con un modal 
if ($dataToView ["data"] > 0) {
        echo "codigo de error para informat al usuario". $dataToView ["data"];
} else {
?>
        <div class="row">
            <div class="alert alert-success">
               Nota eliminada correctamente.
                <a href="index.php?controller=cursos&action=mostrar_formulario">
                         Volver al listado</a>
            </div>
        </div>

<?php } ?>

