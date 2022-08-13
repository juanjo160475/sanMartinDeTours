<?php
$id = $titulo = $descripcion = $fechaInicio = $fechaFinal= $idImagen=$idSede="";

if(isset($dataToView["data"]["id"])) $id = $dataToView["data"]["id"];
if(isset($dataToView["data"]["id_imagen"])) $idImagen = $dataToView["data"]["id_imagen"];
if(isset($dataToView["data"]["id_sede"])) $idSede = $dataToView["data"]["id_sede"];
if(isset($dataToView["data"]["titulo"])) $titulo = $dataToView["data"]["titulo"];
if(isset($dataToView["data"]["descripcion"])) $descripcion = $dataToView["data"]["descripcion"];
if(isset($dataToView["data"]["fechaInicio"])) $fechaInicio= $dataToView["data"]["fechaInicio"];
if(isset($dataToView["data"]["fechafinal"])) $fechaFinal= $dataToView["data"]["fechafinal"];
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

<h1>Ingresar Cursos</h1>
<form action="index.php?controller=cursos&action=save" method="POST">
             <div class="form-group" >
             <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
             <input type="hidden" name="model" value="cursosModel" /> 
             <label for="formGroupExampleInput">Titulo</label>
                <input type="text" class="form-control" name="titulo"
                 value="<?php echo $titulo; ?>"
                 placeholder="Nombre">
             </div>
            
             <div class="form-group">
               <label for="formGroupExampleInput2">Id imagen</label>
               <input type="text" class="form-control" name="id_imagen"
                value="<?php echo $idImagen; ?>"
                placeholder="imagen">
             </div>

             <div class="form-group">
               <label for="formGroupExampleInput2">Id sede</label>
               <input type="text" class="form-control" name="id_sede"
                value="<?php echo $idSede; ?>"
                placeholder="sede">
             </div>

             <div class="form-group">
               <label for="formGroupExampleInput2">Descripcion</label>
               <input type="text" class="form-control" name="descripcion"
                value="<?php echo $descripcion; ?>"
                placeholder="Descripcion">
             </div>
      <br>       
             <div class="form-group">
             <label for="formGroupExampleInput">Inicio: </label>
                  <input type="date" id="inicio" name="fechaInicio"
                  min="2021-01-01" max="2030-12-31"  value="<?php echo $fechaInicio; ?>" >
            </div>
<br>
            <div class="form-group">
             <label for="formGroupExampleInput">Final: </label>
                  <input type="date" id="final" name="fechaFinal"
                  min="2021-01-01" max="2030-12-31"  value="<?php echo $fechaFinal; ?>" >
            </div>
               
        <br>    
            <div class="form-group">  
                <input type="submit" value="Guardar" class="btn btn-primary"/>
            
                <a class="btn btn-outline-danger" href="index.php?controller=listCursos&action=list">Cancelar</a>
             </div>
             
             
</form>