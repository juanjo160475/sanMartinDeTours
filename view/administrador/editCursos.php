	
	<?php 
	session_start();
if(isset($_SESSION["usuario"]))
{
  if(count($dataToView["data"])>0){//en este if se debe filtrar para entrar al carrucel
  
   ?>
	<section>
		<div id="slider" class="container-fluid headercursos" >
		
			<div class="row">
				<h1 class="text-center"><b>Los más populares</b></h1>
				<div class="slider" >

				
         
					<div class="owl-carousel" >
					<?php 
					
                 foreach($dataToView["data"] as $note) { 
					
                 ?>
						<div class="slider-card">
							<div class="d-flex justify-content-center align-items-center mb-4">
								<img src="assets\img\cursos\<?php echo $note['nombreImagen'];?>" alt="">
							</div>
							<h5 class="mb-0 text-center"><b><?php echo $note['titulo'];?></b></h5>
							<p class="text-center p-4"><?php echo $note['descripcion'];?></p>
							<div class="card-read-more">
								<a href="" class="btn btn-link btn-block w-100">
									Inscribirme
								</a>

								
							</div>
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
			<div class="pt-3 row text-center tituloscursos">
				<h1>Todos los cursos</h1>
			</div>
			<hr class="solid">
		</div>
		
		<div class="container-fluid">
			<div class="mt-5 row text-center">
				<div class="col-md-4 border-end">
					<script>var buttonUp = () => 
					{
							const input = document.querySelector(".searchbox-input");
							const cards = document.getElementsByClassName("card");
							let filter = input.value;
							for (let i = 0; i < cards.length; i++) 
							{
								let title = cards[i].querySelector(".card-body");
								if (title.innerText.indexOf(filter) > -1) {
									cards[i].classList.remove("d-none");
								} else {
									cards[i].classList.add("d-none");
								}
							}
					}
					</script>
					<h4 class="tituloscursos">Filtros</h4>
					<hr class="solid">
					<div class="input">
						<input type="search" placeholder="Buscar" name="search" class="searchbox-input"
							onkeyup="buttonUp()" required>
					</div>
					<hr class="solid">
				</div>
				
				
				<div class="col">
				<?php foreach($dataToView["data"] as $note) {?>
				    <div class="mt-1 card card-cursos l-bg-blue-dark">
					
					   <div class="card-body">
							<div class="card-icon card-icon-large"><i class="fas fa-bolt"></i></div>
							 <h4 class="card-title"><?php echo $note['titulo'];?></h4>
							 <p class="card-text"><?php echo $note['descripcion'];?></p>
							
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

	
	