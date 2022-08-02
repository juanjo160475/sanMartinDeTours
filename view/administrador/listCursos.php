	
	<?php 
	session_start();
if(isset($_SESSION["usuario"]))
{
  if(count($dataToView["data"])>0){//en este if filtra para entrar al carrucel
  
   ?>
	<section>
		<div id="slider" class="container-fluid headercursos" >
		
			<div class="row">
				<h1 class="text-center"><b>Imagenes</b></h1>
				<div class="slider" >

				
         
					<div class="owl-carousel"  data-interval="false" >
					<?php 
					
                 foreach($dataToView["data"] ["imagenes"] as $note) { 
					
                 ?>
						<div class="slider-card">
							<div class="d-flex justify-content-center align-items-center mb-4">
								<img src="assets\img\cursos\<?php echo $note['nombreImagen'];?>" alt="">
							</div>
							<h5 class="mb-0 text-center"><b><?php echo $note['nombreImagen'];?></b></h5>
							<p class="text-center p-4"><?php echo $note['url'];?></p>
							
						</div>
						<?php  }//fin de for ?>
						
						
					</div>
				</div>
			</div>
	</section>
	<?php   
            }// fin de if para entrar al carrucel
    ?>
		

	<section class="todoscursos">
		
	     
		
		<div class="container-fluid">
			<div class="mt-5 row text-center">
				<div class="col-md-6 border-end">
				
				<div class="pt-3 row text-center tituloscursos">
				<h1>Sedes</h1>
			    </div>
				
				<?php foreach($dataToView["data"] ["sedes"]as $note) {?>
				    <div class="mt-1 card card-cursos l-bg-blue-dark">
					
					   <div class="card-body">
							<div class="card-icon card-icon-large"></div>
							 <h4 class="card-title"><?php echo $note['nombre_sede'];?></h4>
							 <p class="card-text"><?php echo $note['direccion'];?></p>
							
							 <!-- ******** botones delete, edit, nuevo***** -->
							   <button type="button" class="inscripcion btn btn-primary btn-sm align-end" > 
							     <a href="index.php?controller=cursos&action=editSede&id=
                                 <?php echo $note['id_sede']; ?>">
								 <img src="assets\edit.svg" 
						         height ="30" width="30" /> </a>
								</button>

								<button type="button" class="inscripcion btn btn-primary btn-sm align-end"> 
							     <a href="index.php?controller=cursos&action=confirmDelete&id=
                                 <?php echo $note['id_sede']; ?>">
								 <img src="assets\delete.svg" 
						         height ="30" width="30" /></a>
								</button>

								<button type="button" class="inscripcion btn btn-primary btn-sm align-end"> 
							     <a href="index.php?controller=cursos&action=editSede">
								 <img src="assets\plus.svg" 
						         height ="30" width="30" /></a>
								</button>
						 </div>
					 </div>
					 <?php }?>
				</div>
				
				
				<div class="col">

				<div class="pt-3 row text-center tituloscursos">
				<h1>Cursos</h1>
			    </div>
				<?php foreach($dataToView["data"] ["cursos"]as $note) {?>
				    <div class="mt-1 card card-cursos l-bg-blue-dark">
					
					   <div class="card-body">
							<div class="card-icon card-icon-large"></div>
							 <h4 class="card-title"><?php echo $note['titulo'];?></h4>
							 <p class="card-text"><?php echo $note['id_sede'];?></p>
							
							 <!-- ******** botones delete, edit, nuevo***** -->
							   <button type="button" class="inscripcion btn btn-primary btn-sm align-end" > 
							     <a href="index.php?controller=cursos&action=edit&id=
                                 <?php echo $note['id']; ?>">
								 <img src="assets\edit.svg" 
						         height ="30" width="30" /> </a>
								</button>

								<button type="button" class="inscripcion btn btn-primary btn-sm align-end"> 
							     <a href="index.php?controller=cursos&action=confirmDelete&id=
                                 <?php echo $note['id']; ?>">
								 <img src="assets\delete.svg" 
						         height ="30" width="30" /></a>
								</button>

								<button type="button" class="inscripcion btn btn-primary btn-sm align-end"> 
							     <a href="index.php?controller=cursos&action=edit" >
								 <img src="assets\plus.svg" 
						         height ="30" width="30" /></a>
								</button>
						 </div>
					 </div>
					 <?php }?>
					</div>
				 
			   </div>
			 
		</div>
		
	</section>
	
	

	
 <?php 
} else {
	echo "lo siento mucho";
}
?>

	
	