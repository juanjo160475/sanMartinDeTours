<script>
        // se oculta el header
        const cabecera = document.body.querySelector('#mainNav');
        cabecera.style.display = 'none' 
        
</script>

<?php
$id = $nombre = $direccion = $telefono ="";

if(isset($dataToView["data"]["id"])) $id = $dataToView["data"]["id"];
if(isset($dataToView["data"]["nombre_sede"])) $nombre = $dataToView["data"]["nombre_sede"];
if(isset($dataToView["data"]["direccion"])) $direccion = $dataToView["data"]["direccion"];
if(isset($dataToView["data"]["telefono"])) $telefono = $dataToView["data"]["telefono"];
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

<form action="index.php?controller=cursos&action=save" method="POST">
             <div class="form-group" >
             <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
             <input type="hidden" name="model" value="sedeModelo" /> 
             <label for="formGroupExampleInput">Nombre de sede</label>
                <input type="text" class="form-control" name="nombre"
                 value="<?php echo $nombre; ?>"
                 placeholder="Nombre">
             </div>
             <div class="form-group">
               <label for="formGroupExampleInput2">Direccion de sede</label>
               <input type="text" class="form-control" name="direccion"
                value="<?php echo $direccion; ?>"
                placeholder="Direccion">
             </div>
             <div class="form-group">
               <label for="formGroupExampleInput">Telefono de sede</label>
                <input type="text" class="form-control" name="telefono" 
                value="<?php echo $telefono; ?>"
                placeholder="Telefono">
                <input type="submit" value="Guardar" class="btn btn-primary"/>
                <!--poner aca ocultar o mostrar formulario-->
                <a class="btn btn-outline-danger" href="index.php?controller=cursos&action=list">Cancelar</a>
             </div>
             
             
</form>