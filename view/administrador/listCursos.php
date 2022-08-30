<script>
        // se oculta el header
        const cabecera = document.body.querySelector('#mainNav');
        cabecera.style.display = 'none' 
        
</script>

	<?php 
	session_start();
if(isset($_SESSION["usuario"]))
{
    if(count($dataToView["data"])>0){//en este if filtra para entrar al carrucel
    ?>
	<section class="cursos">


				<div class="contenedor-titulo">
			<h3>Imagenes para los cursos
					<button type="button" title="agregar imagen" data-bs-toggle="modal" data-bs-target="#guardar-imagen"> 
						<img src="assets\plus.svg" />
					</button>
				</div>
			</h3>
			
			
				<div class="contenedor-principal">

					<button role="button" id="flecha-izquierda" class="flecha-izquierda">
					<i class="fa-solid fa-angle-left"></i>  </button>
					<div class="contenedor-carrousel" id="carrousel-imagenes">
						<div class="carrousel">
							<?php
								foreach($dataToView["data"] ["imagenes"] as $note) { ?>
									<div class="imagen">
											<a href="#!">
												<img src="assets\img\cursos\<?php echo $note['nombreImagen'];?>" 
												alt="">
												
												<div class="btn-eliminar">
													<button role ="buton"  
													onclick=
													"eliminar('<?php echo $note['nombreImagen'];?>','<?php echo $note['id'];?>','index.php?controller=cursos&action=delete&model=imagenModel');
													" data-bs-toggle="modal" data-bs-target="#eliminar"> 
													<img src="assets\delete.svg" />
													</button>
												</div> 
													
												<div class="btn-seleccionar">	
													<input type="radio"  name="imagen"  id=<?php echo $note['id']; ?> value= <?php echo $note['id'];?>>
													
												</div>  
											</a>
											
									</div>
									
									
							<?php  } ?>
						
						</div>

					</div>
					<button role="button" id="flecha-derecha" class="flecha-derecha">
					<i class="fa-solid fa-angle-right"></i>  </button>
			

			</div>

						
							
					
				
			
	</section>
	<?php   
            }// fin de if para entrar las imagenes
    ?>

<section class="cursos">
<!-- sedes carrusel -->
    <div class="contenedor-titulo">
        <h3>Sedes
        <button type="button" title="agregar sede" data-bs-toggle="modal" data-bs-target="#guardar-sede"> 
        <img src="assets\plus.svg" />
		</button>
		</h3>
    </div>    
<div class="contenedor-principal">

				<button role="button" id="flecha-izquierda-sede" class="flecha-izquierda">
				<i class="fa-solid fa-angle-left"></i>  </button>
		
	<div class="contenedor-carrousel" id="carrousel-sedes" >
		<div class="carrousel">
			<?php
			foreach($dataToView["data"] ["sedes"] as $note) { ?>
					<div class="imagen">
							<a href="#!">
								<img src="assets/img/papel.jpg" alt="">
													<div class="datos">
														<h3> <?php echo $note['nombre_sede'];?></h2>
														<ul>
															<!--li>Id: <?php echo $note['id'];?></li-->
															<li>Direccion: <?php echo $note['direccion'];?></li>
															<li>Telefono: <?php echo $note['telefono'];?></li>
														</ul>
													</div>
													<br>
													
												
														<div class="btn-eliminar">
																<button role ="button"  
																	onclick=
																	"eliminar('<?php echo $note['nombre_sede'];?>',
																	'<?php echo $note['id'];?>','index.php?controller=cursos&action=delete&model=sedeModelo');
																	" data-bs-toggle="modal" data-bs-target="#eliminar"> 
																	<img src="assets\delete.svg" />
																</button>
														</div>
																	<div class="btn-seleccionar">	
																		<input type="radio" name="sede" id=<?php echo $note['id']; ?> value= <?php echo $note['id']; ?>> 
																	</div>
														<div class="btn-editar">
																<button role="button" data-bs-toggle="modal" data-bs-target="#guardar-sede" onclick= "editarSede('<?php echo $note['id'];?>','<?php echo $note['nombre_sede'];?>',
																	'<?php echo $note['direccion'];?>','<?php echo $note['telefono'];?>' )"> 
																	<img src="assets\edit.svg" /> </a>
																</button>
														</div>
												
									
								</a>
									
					</div>
					<?php  } ?>
				</div>
			</div>
		<button role="button" id="flecha-derecha-sede" class="flecha-derecha">
		<i class="fa-solid fa-angle-right"></i>  </button>


</div>
</section>

<section class="cursos">
<!-- cursos carrusel -->
    <div class="contenedor-titulo">
        <h3>Cursos</h3> 
	</div>    

<div class="contenedor-principal">

				<button role="button" id="flecha-izquierda-curso" class="flecha-izquierda">
				<i class="fa-solid fa-angle-left"></i>  </button>
		
	<div class="contenedor-carrousel" id="carrousel-cursos">
		<div class="carrousel">
			<?php
			foreach($dataToView["data"] ["cursos"] as $note) { ?>
					<div class="imagen">
							<a href="#!">
								<img src="assets/img/papel.jpg" alt="">
								<div class="datos">
									<h2> <?php echo $note['titulo'];?></h2>
											<ul>
											<li>Inicio: <?php echo $note['fechaInicio'];?></li>
											<li>Final: <?php echo $note['fechafinal'];?></li>
											</ul>
								</div>
													<br>
													
								<div class="btn-eliminar">
										<button role ="button"  
										onclick=
										"eliminar('<?php echo $note['titulo'];?>',
										'<?php echo $note['id'];?>','index.php?controller=cursos&action=delete&model=sedeModelo');
										" data-bs-toggle="modal" data-bs-target="#eliminar"> 
										<img src="assets\delete.svg" />
										</button>
								</div>	
											
								<div class="btn-editar">
									<button role="button" data-bs-toggle="modal" data-bs-target="#guardar-curso"
								onclick= "editarCurso('<?php echo $note['id'];?>','<?php echo $note['id_imagen'];?>',
									'<?php echo $note['id_sede'];?>','<?php echo $note['titulo'];?>','<?php echo $note['descripcion'];?>'
									,'<?php echo $note['fechaInicio'];?>','<?php echo $note['fechafinal'];?>' )"> 
									<img src="assets\edit.svg" /> </a>
									</button>
								</div>
							</a>
					</div>

					<?php  } ?>
				</div>
			</div>
			<button role="button" id="flecha-derecha-curso" class="flecha-derecha">
				<i class="fa-solid fa-angle-right"></i>  </button>
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

	
	