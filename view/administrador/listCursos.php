	
	<?php 
	session_start();
if(isset($_SESSION["usuario"]))
{
  if(count($dataToView["data"])>0){//en este if filtra para entrar al carrucel
  
   ?>
	<section>



	<div class="container-fluid headercursos" >	
		   <div class="row">
			    <h1 class="text-center"><b>Imagenes</b> <button type="button"> 
							     <a href="index.php?controller=cursos&action=editImagen">
								 <img src="assets\plus.svg" 
						         height ="30" width="30" /></a>
								</button></h1>
				
				<?php 
					
                foreach($dataToView["data"] ["imagenes"] as $note) { 
					
                 ?>
				
				<div class="col-sm-4 col-md-4">
               		<div class="thumbnail">
                    	<img src = "assets\img\cursos\<?php echo $note['nombreImagen'];?>"
						width="250" height="160" alt="">
                    	<div class="caption">
					        	<h5 class="mb-0 text-center"> <?php echo $note['id'];?></h5>
                       		 <p>
                               <br/>                  
							      <!-- ******** botones delete, edit, nueva imagen***** -->
							   

								<button type="button"> 
							     <a href="index.php?controller=cursos&action=confirmDelete&id=
                                 <?php echo $note['id']; ?>&model=imagenModel">
								 <img src="assets\delete.svg" 
						         height ="30" width="30" /></a>
								</button>

								<input type="radio" name="imagen" value= <?php echo $note['id'];?> id="interesado"> 
								<label for="interesado">Agregar al nuevo curso</label> 

								
                        	</p>
                  	  </div>
               	   </div>
               </div>

        		
						<?php  }//fin de for ?>
		    </div>		
						
		</div>			
				
			
	</section>
	<?php   
            }// fin de if para entrar las imagenes
    ?>


<div class="contenedor-titulo">
        <h3>Imagenes de cursos</h3> 
		
		                      <button type="button"  data-bs-toggle="modal" data-bs-target="#guardar-imagen"> 
							   <img src="assets\plus.svg" />
								</button>
      </div>    
  
  
  
    <div class="contenedor-principal">

        <button role="button" id="flecha-izquierda" class="flecha-izquierda">
        <i class="fa-solid fa-angle-left"></i>  </button>
        <div class="contenedor-carrousel">
            <div class="carrousel">
				<?php
					foreach($dataToView["data"] ["imagenes"] as $note) { ?>
			 			<div class="imagen">
								<a href="#!">
									<img src="assets\img\cursos\<?php echo $note['nombreImagen'];?>" 
									 alt="">
								</a>
							     <div class="btn-edicion">
								   <button role ="buton"  
									onclick=
									"eliminar('<?php echo $note['nombreImagen'];?>','<?php echo $note['id'];?>','index.php?controller=cursos&action=delete&model=imagenModel');
									" data-bs-toggle="modal" data-bs-target="#eliminar"> 
									<a>
									<img src="assets\delete.svg" />
								    </a>
									</button>
									<input type="radio" name="imagen"  id=<?php echo $note['id']; ?> value= <?php echo $note['id'];?>> 
								     
							     
						       </div>  
						</div>
						 
						 
			 	 <?php  } ?>
             
			</div>

        </div>
          <button role="button" id="flecha-derecha" class="flecha-derecha">
          <i class="fa-solid fa-angle-right"></i>  </button>
 

   </div>

   <!-- sedes carrusel -->
   <div class="contenedor-titulo">
        <h3>Sedes</h3> 
		
		                      <button type="button"  data-bs-toggle="modal" data-bs-target="#guardar-curso"> 
							   <img src="assets\plus.svg" />
								</button>
      </div>    
  
<div class="contenedor-principal">

				<button role="button" id="flecha-izquierda" class="flecha-izquierda">
				<i class="fa-solid fa-angle-left"></i>  </button>
		
	<div class="contenedor-carrousel">
		<div class="carrousel">
			<?php
		
			  foreach($dataToView["data"] ["sedes"] as $note) { ?>
					<div class="imagen">
							<a href="#!">
								<div class="mi-card">
										<ul class="list-group list-group-flush">
											<li class="list-group-item">Sede: <?php echo $note['nombre_sede'];?></li>
											<li class="list-group-item" >Id: <?php echo $note['id'];?></li>
											<li class="list-group-item">Direccion: <?php echo $note['direccion'];?></li>
											<li class="list-group-item">Telefono: <?php echo $note['telefono'];?></li>
										</ul>
										<br>
										<div class="card-footer">
									
											<div class="btn-edicion">
												<button role ="button"  
													onclick=
													"eliminar('<?php echo $note['nombre_sede'];?>',
													'<?php echo $note['id'];?>','index.php?controller=cursos&action=delete&model=sedeModelo');
													" data-bs-toggle="modal" data-bs-target="#eliminar"> 
													<img src="assets\delete.svg" />
											    </button>
												
												<input type="radio" name="sede" id=<?php echo $note['id']; ?> value= <?php echo $note['id']; ?>> 
											
												<button role="button" data-bs-toggle="modal" data-bs-target="#guardar-sede"
												  onclick= "editarSede('<?php echo $note['id'];?>','<?php echo $note['nombre_sede'];?>',
												 '<?php echo $note['direccion'];?>','<?php echo $note['telefono'];?>' )"> 
													<img src="assets\edit.svg" /> </a>
												</button>
											</div>
										</div>
								</div>
							</a>
								
						 
					</div>
				 
				 
		  <?php  } ?>
	 
	  </div>

   </div>
		<button role="button" id="flecha-derecha" class="flecha-derecha">
		<i class="fa-solid fa-angle-right"></i>  </button>


</div>

 <!-- cursos carrusel -->
 <div class="contenedor-titulo">
        <h3>Cursos</h3> 
		
  </div>    
  
<div class="contenedor-principal">

				<button role="button" id="flecha-izquierda" class="flecha-izquierda">
				<i class="fa-solid fa-angle-left"></i>  </button>
		
	<div class="contenedor-carrousel">
		<div class="carrousel">
			<?php
		
			  foreach($dataToView["data"] ["cursos"] as $note) { ?>
					<div class="imagen">
							<a href="#!">
								<div class="mi-card">
										<ul class="list-group list-group-flush">
											<li class="list-group-item">Titulo: <?php echo $note['titulo'];?></li>
											<li class="list-group-item" >Id: <?php echo $note['id'];?></li>
											<li class="list-group-item">Fecha: <?php echo $note['fechaInicio'];?></li>
											<li class="list-group-item">Codigo sede: <?php echo $note['id_sede'];?></li>
										</ul>
										<br>
										<div class="card-footer">
									
											<div class="btn-edicion">
												<button role ="button"  
													onclick=
													"eliminar('<?php echo $note['titulo'];?>',
													'<?php echo $note['id'];?>','index.php?controller=cursos&action=delete&model=sedeModelo');
													" data-bs-toggle="modal" data-bs-target="#eliminar"> 
													<img src="assets\delete.svg" />
											    </button>
												
											
											
												<button role="button" data-bs-toggle="modal" data-bs-target="#guardar-curso"
												  onclick= "editarCurso('<?php echo $note['id'];?>','<?php echo $note['id_imagen'];?>',
												 '<?php echo $note['id_sede'];?>','<?php echo $note['titulo'];?>','<?php echo $note['descripcion'];?>'
												 ,'<?php echo $note['fechaInicio'];?>','<?php echo $note['fechafinal'];?>' )"> 
													<img src="assets\edit.svg" /> </a>
												</button>
											</div>
										</div>
								</div>
							</a>
								
						 
					</div>
				 
				 
		  <?php  } ?>
	 
	  </div>

   </div>
		<button role="button" id="flecha-derecha" class="flecha-derecha">
		<i class="fa-solid fa-angle-right"></i>  </button>


</div>


   									

	<section class="todoscursos">
		
	     
		
		<div class="container-fluid">
			<div class="mt-5 row text-center">
				<div class="col-md-6 border-end">
				
				<div class="pt-3 row text-center tituloscursos">
				<h1>Sedes <button type="button" class="inscripcion btn btn-primary btn-sm align-end"> 
							     <a href="index.php?controller=cursos&action=editSede">
								 <img src="assets\plus.svg" 
						         height ="30" width="30" /></a>
								</button></h1>
			    </div>
				
				<?php foreach($dataToView["data"] ["sedes"]as $note) {?>
				    <div class="mt-1 card card-cursos l-bg-blue-dark">
					
					   <div class="card-body">
							<div class="card-icon card-icon-large"></div>
							 <h4 class="card-title"><?php echo $note['nombre_sede'];?></h4>
							 <p class="card-text"><?php echo $note['id'];?></p>
							
							 <!-- ******** botones delete, edit, nueva SEDE***** -->
							   <button type="button" class="inscripcion btn btn-primary btn-sm align-end" > 
							     <a href="index.php?controller=cursos&action=editSede&id=
                                 <?php echo $note['id']; ?>">
								 <img src="assets\edit.svg" 
						         height ="30" width="30" /> </a>
								</button>

								<button type="button" class="inscripcion btn btn-primary btn-sm align-end"> 
							     <a href="index.php?controller=cursos&action=confirmDelete&id=
                                 <?php echo $note['id']; ?> & model=sedeModelo">
								 <img src="assets\delete.svg" 
						         height ="30" width="30" /></a>
								</button>
								<input type="radio" name="sede" value= <?php echo $note['id']; ?> id="interesado"> 
								<label for="interesado">Agregar a nuevo curso</label> 

								
						 </div>
					 </div>
					 <?php }?>
				</div>
				
				
				<div class="col">

				<div class="pt-3 row text-center tituloscursos">
				<h1>Cursos <button type="button" class="inscripcion btn btn-primary btn-sm align-end"> 
							     <a href="index.php?controller=cursos&action=editCurso" >
								 <img src="assets\plus.svg" 
						         height ="30" width="30" /></a>
								</button></h1>
			    </div>
				<?php foreach($dataToView["data"] ["cursos"]as $note) {?>
				    <div class="mt-1 card card-cursos l-bg-blue-dark">
					
					   <div class="card-body">
							<div class="card-icon card-icon-large"></div>
							 <h4 class="card-title"> <?php echo $note['titulo'];?></h4>
							 <p class="card-fecha"><?php echo  date("d/m/y", strtotime($note['fechaInicio']));?></p>
							 <p class="card-sede"><?php echo "sede: ".$note['id_sede'];?></p>

							 <!-- ******** botones delete, edit, nuevo curso***** -->
							   <button type="button" class="inscripcion btn btn-primary btn-sm align-end" > 
							     <a href="index.php?controller=cursos&action=editCurso&id=
                                 <?php echo $note['id']; ?>">
								 <img src="assets/edit.svg" 
						         height ="30" width="30" /> </a>
								</button>

								<button type="button" class="inscripcion btn btn-primary btn-sm align-end"> 
								<a href="index.php?controller=cursos&action=confirmDelete&id=
                                 <?php echo $note['id'];?>&model=cursosModel">
								 <img src="assets/delete.svg" 
						         height ="30" width="30" /></a>
								</button>

								
						 </div>
					 </div>
					 <?php }?>
					</div>
				 
			   </div>
			 
		</div>
		
	</section>
	<h1>Ingresar Cursos  <br>   <button id="botonAgregar">Agregar imagen y sede seleccionadas</button> </h1>
	

	
 <?php 
 require_once 'view\administrador\formularioCurso.php';
 require_once 'view\administrador\modalImagenes.html';
} else {
	echo "lo siento mucho";
}
?>

	
	