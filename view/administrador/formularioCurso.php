<?php/*
$id = $titulo = $descripcion = $fechaInicio = $fechaFinal= $idImagen=$idSede="";

if(isset($dataToView["data"]["editCurso"]["id"])) $id = $dataToView["data"]["editCurso"]["id"];
if(isset($dataToView["data"]["editCurso"]["id_imagen"])) $idImagen = $dataToView["data"]["editCurso"]["id_imagen"];
if(isset($dataToView["data"]["editCurso"]["id_sede"])) $idSede = $dataToView["data"]["editCurso"]["id_sede"];
if(isset($dataToView["data"]["editCurso"]["titulo"])) $titulo = $dataToView["data"]["editCurso"]["titulo"];
if(isset($dataToView["data"]["editCurso"]["descripcion"])) $descripcion = $dataToView["data"]["editCurso"]["descripcion"];
if(isset($dataToView["data"]["editCurso"]["fechaInicio"])) $fechaInicio= $dataToView["data"]["editCurso"]["fechaInicio"];
if(isset($dataToView["data"]["editCurso"]["fechafinal"])) $fechaFinal= $dataToView["data"]["editCurso"]["fechafinal"];
*/?>
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
             <input type="hidden" id="id-curso" name="id" value="" /> 
             <input type="hidden" name="model" value="cursosModel" /> 
             <label for="formGroupExampleInput">Titulo</label>
               
             <input type="text" id ="titulo" class="form-control" name="titulo"
                 value=""
                 placeholder="Nombre">
             </div>
            
             <div class="form-group">
               <label for="imagen">Id imagen</label>
               <input type="text" id= "imagen" class="form-control" name="id_imagen"
                value= ""
                placeholder="imagen">
             </div>

             <div class="form-group">
               <label for="sede">Id sede</label>
               <input type="text" id= "sede" class="form-control" name="id_sede"
                value=""
                placeholder="sede">
             </div>

             <div class="form-group">
               <label for="descripcion">Descripcion</label>
               <input type="text" id="descripcion" class="form-control" name="descripcion"
                value=""
                placeholder="Descripcion">
             </div>
      <br>       
             <div class="form-group">
             <label for="inicio">Inicio: </label>
                  <input type="date" id="inicio" name="fechaInicio"
                   value="" >
            </div>
<br>
            <div class="form-group">
             <label for="final">Final: </label>
                  <input type="date" id="final" name="fechaFinal"
                    value="" >
            </div>
               
        <br>    
            <div class="form-group">  
                <input type="submit" value="Guardar" class="btn btn-primary"/>
            
               
             </div>
             
             
</form>

                              