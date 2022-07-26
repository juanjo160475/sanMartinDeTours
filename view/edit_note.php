
<script>
        // se oculta el header
        const cabecera = document.body.querySelector('#mainNav');
        cabecera.style.display = 'none' 
        
</script>
<?php
$id = $titulo = $descripcion = $foto = "";

if(isset($dataToView["data"]["id"])) $id = $dataToView["data"]["id"];
if(isset($dataToView["data"]["titulo"])) $titulo = $dataToView["data"]["titulo"];
if(isset($dataToView["data"]["descripcion"])) $descripcion = $dataToView["data"]["descripcion"];
if(isset($dataToView["data"]["foto"])) $foto = $dataToView["data"]["foto"];
?>
<div class="row">
	<?php
	if(isset($_GET["response"]) and $_GET["response"] === true){
		?>
		<div class="alert alert-success">
			Operación realizada correctamente.
			 <a href="index.php?controller=cursos&action=list">Volver al listado</a>
		</div>
		<?php
	}
	?>
	<form class="form" action="index.php?controller=cursos&action=save" method="POST" 
	enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $id; ?>" />
		<div class="form-group">
			<label>Título</label>
			<input class="form-control" type="text" name="titulo" 
			value="<?php echo $titulo; ?>" />
		</div>
		
		<div class="form-group">
			<label>Descripcion</label>
			<input class="form-control" type="text" name="descripcion" 
			value="<?php echo $descripcion; ?>" />
		</div>

		<div class="form-group">
			<label>Archivo</label>
			<input class="form-control" type="text" name="nombrefoto" 
			value="<?php echo $foto; ?>" />
		</div>
		<div class="form-group">
		   <label>Imagen</label>
		   <input type="file" name="imagen"  >
		</div>
		
		<input type="submit" value="Guardar" class="btn btn-primary"/>
		<a class="btn btn-outline-danger" href="index.php?controller=cursos&action=list">Cancelar</a>
	</form>
	      

</div>