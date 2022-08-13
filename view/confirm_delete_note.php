<script>
        // se oculta el header
        const cabecera = document.body.querySelector('#mainNav');
        cabecera.style.display = 'none' 
        
</script>

<?php if (isset ($dataToView["data"]["nombre_sede"])) {?>
<div class="row">
	<form class="form" action="index.php?controller=cursos&action=delete&model=sedeModelo" method="POST">
		<input type="hidden" name="id" 
		value="<?php echo $dataToView["data"]["id"]; ?>" />
		<div class="alert alert-warning">
			<b>¿Confirma que desea eliminar esta nota?:</b>
			<i><?php echo $dataToView["data"]["nombre_sede"]; ?></i>
		</div>
		<input type="submit" value="Eliminar" class="btn btn-danger"/>
		<a class="btn btn-outline-success" href="index.php?controller=cursos&action=mostrar_formulario">Cancelar</a>
	</form>
</div>

<?php } ?>


<?php if (isset ($dataToView["data"]["nombreImagen"])) {?>
<div class="row">
	<form class="form" action="index.php?controller=cursos&action=delete&model=imagenModel" method="POST">
		<input type="hidden" name="id" 
		value="<?php echo $dataToView["data"]["id"]; ?>" />
		<div class="alert alert-warning">
			<b>¿Confirma que desea eliminar esta nota?:</b>
			<i><?php echo $dataToView["data"]["nombreImagen"]; ?></i>
		</div>
		<input type="submit" value="Eliminar" class="btn btn-danger"/>
		<a class="btn btn-outline-success" href="index.php?controller=cursos&action=mostrar_formulario">Cancelar</a>
	</form>
</div>

<?php } ?>


<?php if (isset ($dataToView["data"]["titulo"])) {?>
<div class="row">
	<form class="form" action="index.php?controller=cursos&action=delete&model=cursosModel" method="POST">
		<input type="hidden" name="id" 
		value="<?php echo $dataToView["data"]["id"]; ?>" />
		<div class="alert alert-warning">
			<b>¿Confirma que desea eliminar esta nota?:</b>
			<i><?php echo $dataToView["data"]["titulo"]; ?></i>
		</div>
		<input type="submit" value="Eliminar" class="btn btn-danger"/>
		<a class="btn btn-outline-success" href="index.php?controller=cursos&action=mostrar_formulario">Cancelar</a>
	</form>
</div>

<?php } ?>