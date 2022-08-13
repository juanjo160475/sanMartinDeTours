<script>
        // se oculta el header
        const cabecera = document.body.querySelector('#mainNav');
        cabecera.style.display = 'none' 
        
</script>

<?php
$id = $nombre = "";

if(isset($dataToView["data"]["id"])) $id = $dataToView["data"]["id"];
if(isset($dataToView["data"]["nombreImagen"])) $nombre = $dataToView["data"]["nombreImagen"];

?>
<div class="row">
	<?php
	if(isset($_GET["response"]) and $_GET["response"] === true){
		?>
		<div class="alert alert-success">
			Operación realizada correctamente.
			 <a href="index.php?controller=cursos&action=mostrar_formulario">
                                 Volver al listado</a>
		</div>
		<?php
    }
	?>

<form action="index.php?controller=cursos&action=save" method="POST" enctype="multipart/form-data">
             
                <div class="form-group" >
                 <input type="hidden" name="model" value="imagenModel" /> 
                 </div>
                 <div class="form-group" >
                 <input type="file" name="imagen" >
                 </div>
                 
                 <input type="submit" value="Guardar" class="btn btn-primary"/>
                 <a class="btn btn-outline-danger" 
                 href="index.php?controller=cursos&action=list">Cancelar</a>
                
             
             
</form>