<?php
$id = $titulo = $descripcion = $fechaInicio = $fechaFinal= $idImagen=$idSede="";

if(isset($dataToView["data"]["editCurso"]["id"])) $id = $dataToView["data"]["editCurso"]["id"];
if(isset($dataToView["data"]["editCurso"]["id_imagen"])) $idImagen = $dataToView["data"]["editCurso"]["id_imagen"];
if(isset($dataToView["data"]["editCurso"]["id_sede"])) $idSede = $dataToView["data"]["editCurso"]["id_sede"];
if(isset($dataToView["data"]["editCurso"]["titulo"])) $titulo = $dataToView["data"]["editCurso"]["titulo"];
if(isset($dataToView["data"]["editCurso"]["descripcion"])) $descripcion = $dataToView["data"]["editCurso"]["descripcion"];
if(isset($dataToView["data"]["editCurso"]["fechaInicio"])) $fechaInicio= $dataToView["data"]["editCurso"]["fechaInicio"];
if(isset($dataToView["data"]["editCurso"]["fechafinal"])) $fechaFinal= $dataToView["data"]["editCurso"]["fechafinal"];
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

<h1>Ingresar Cursos  <br>   <button id="botonAgregar">Agregar imagen y sede seleccionadas</button> </h1>
<form action="index.php?controller=cursos&action=save" method="POST">
             <div class="form-group" >
             <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
             <input type="hidden" name="model" value="cursosModel" /> 
             <label for="formGroupExampleInput">Titulo</label>
               
             <input type="text" id ="titulo" class="form-control" name="titulo"
                 value="<?php echo $titulo; ?>"
                 placeholder="Nombre">
             </div>
            
             <div class="form-group">
               <label for="formGroupExampleInput2">Id imagen</label>
               <input type="text" id= "imagen" class="form-control" name="id_imagen"
                value= "<?php echo $idImagen; ?>"
                placeholder="imagen">
             </div>

             <div class="form-group">
               <label for="formGroupExampleInput2">Id sede</label>
               <input type="text" id= "sede" class="form-control" name="id_sede"
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

                              <script>
                                   document.getElementById('botonAgregar').addEventListener('click', function() {
                                   // let valorActivo = document.querySelector('input[name="status"]:checked').value; // Esto tiene el problema de que puede que un elemento no esté activo, entonces no se podría acceder al value de un null, lo que sería un error en tiempo de ejecución
                                   let sedeElegida = document.querySelector('input[name="sede"]:checked');
                                   let imagenElegida = document.querySelector('input[name="imagen"]:checked');
                                   if(sedeElegida) {
                                          
                                          document.getElementById('sede').value=sedeElegida.value;
                                   } else {
                                          alert('Falta agregar sede');
                                   }
                                  
                                    if(imagenElegida) {
                                          
                                          document.getElementById('imagen').value=imagenElegida.value;
                                   } else {
                                          alert('Falta agreger una imagen');
                                   }
                                   });
                                   
                                   
                                  
                          
                            </script>