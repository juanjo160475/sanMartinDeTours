<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title>Fundación San Martín de Tours</title>
	<link rel="icon" type="image/x-icon" href="assets/SMDTIcon.ico" />
	<!-- Font Awesome icons (free version)-->
	<script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
	<!-- Google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
	<link
		href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
		rel="stylesheet" />
	<!-- Core theme CSS (includes Bootstrap)-->
	<link href="css/styles.css" rel="stylesheet" />
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="css/slider.css">
</head>

<body id="page-top">
	<!-- Navigation-->
	<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
		<div class="container px-4 px-lg-5">
			<img src="assets/Logo.png" id="logo" style="width: 140px; height: 80px;"></img>
			<!--<a class="navbar-brand ml-2" href="#page-top">San Martin de Tours</a>-->
			<button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
				data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
				aria-label="Toggle navigation">
				Menu
				<i class="fas fa-bars"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ms-auto">
					<li class="nav-item"><a class="nav-link" href="#slideMVV">Quienes somos</a></li>
					<li class="nav-item"><a class="nav-link" href="#contact">Contacto</a></li>
					<li class="nav-item"><a class="nav-link" href="">Colaborar</a></li>
					<li class="nav-item"><a class="nav-link" href="">Prensa</a></li>
					<li class="nav-item"><a class="nav-link" href="">Cursos</a></li>
					<li class="nav-item"><a class="nav-link" href="">Noticias</a></li>
				</ul>
			</div>
		</div>
	</nav>
	
	<?php 

if(count($dataToView["data"])>0){
  
   ?>
	<section>
		<div id="slider" class="container-fluid headercursos">
			<div class="row">
				<h1 class="text-center"><b>Los más populares</b></h1>
				<div class="slider">

				
         
					<div class="owl-carousel">
					<?php 
                 foreach($dataToView["data"] as $note) { 
                 ?>
						<div class="slider-card">
							<div class="d-flex justify-content-center align-items-center mb-4">
								<img src="imagenes\inicio\<?php echo $note['foto'];?>" alt="">
							</div>
							<h5 class="mb-0 text-center"><b><?php echo $note['titulo'];?></b></h5>
							<p class="text-center p-4"><?php echo $note['descripcion'];?></p>
							<div class="card-read-more">
								<a href="" class="btn btn-link btn-block w-100">
									Inscribirme
								</a>

								<!-- delet y edit -->
								<a href="index.php?controller=cursos&action=edit&id=
                                 <?php echo $note['id']; ?>" class="btn btn-primary">Editar</a>
					             <a href="index.php?controller=cursos&action=confirmDelete&id=
                                 <?php echo $note['id']; ?>" class="btn btn-danger">Eliminar</a>
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
		 <div class="col-md-12 text-right">
		<a href="index.php?controller=cursos&action=edit" class="btn btn-outline-primary">
			Foto Nueva</a>
		<hr/>
	</div>

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
					<script>var buttonUp = () => {
							const input = document.querySelector(".searchbox-input");
							const cards = document.getElementsByClassName("card");
							let filter = input.value;
							for (let i = 0; i < cards.length; i++) {
								let title = cards[i].querySelector(".card-body");
								if (title.innerText.indexOf(filter) > -1) {
									cards[i].classList.remove("d-none");
								} else {
									cards[i].classList.add("d-none");
								}
							}
						}</script>
					<h4 class="tituloscursos">Filtros</h4>
					<hr class="solid">
					<div class="input">
						<input type="search" placeholder="Buscar" name="search" class="searchbox-input"
							onkeyup="buttonUp()" required>
					</div>
					<hr class="solid">
				</div>
				<div class="col">
					<div class="mt-1 card card-cursos l-bg-blue-dark">
						<div class="card-body">
							<div class="card-icon card-icon-large"><i class="fas fa-bolt"></i></div>
							<h4 class="card-title">Electricidad</h4>
							<p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est veritatis
								tempora cum rerum amet officiis vitae atque fuga, pariatur blanditiis velit nam quod
								consequuntur, iure tenetur maxime non dicta natus?</p>
							<button type="button"
								class="inscripcion btn btn-primary btn-sm align-end">Inscribirme</button>
						</div>
					</div>
					<div class="mt-1 card card-cursos l-bg-blue-dark">
						<div class="card-body">
							<h4 class="card-title">Durlock</h4>
							<p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est veritatis
								tempora cum rerum amet officiis vitae atque fuga, pariatur blanditiis velit nam quod
								consequuntur, iure tenetur maxime non dicta natus?</p>
							<button type="button"
								class="inscripcion btn btn-primary btn-sm align-end">Inscribirme</button>
						</div>
					</div>
					<div class="mt-1 card card-cursos l-bg-blue-dark">
						<div class="card-body">
							<h4 class="card-title">Crypto</h4>
							<p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est veritatis
								tempora cum rerum amet officiis vitae atque fuga, pariatur blanditiis velit nam quod
								consequuntur, iure tenetur maxime non dicta natus?</p>
							<button type="button"
								class="inscripcion btn btn-primary btn-sm align-end">Inscribirme</button>
						</div>
					</div>
					<div class="mt-1 card card-cursos l-bg-blue-dark">
						<div class="card-body">
							<h4 class="card-title">Albañileria</h4>
							<p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est veritatis
								tempora cum rerum amet officiis vitae atque fuga, pariatur blanditiis velit nam quod
								consequuntur, iure tenetur maxime non dicta natus?</p>
							<button type="button"
								class="inscripcion btn btn-primary btn-sm align-end">Inscribirme</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	

	<!-- Footer-->
	<footer class="elfooter small text-center text-white-50">
		<div class="container-fluid p-4 text-center">
			<section>
				<div class="row">
					<h5 class="card-title m-2">Fundacion San Martín de Tours</h5>
					<div class="links">
						<a href="https://www.facebook.com/" target="_blank"><img class="m-2" src="assets/facebook.svg"
								alt="Facebook" width="32" height="32"></a>
						<a href="https://www.instagram.com/" target="_blank"><img class="m-2" src="assets/instagram.svg"
								alt="Intagram" width="32" height="32"></a>
						<a href="https://twitter.com/" target="_blank"><img class="m-2" src="assets/twitter.svg"
								alt="twitter" width="32" height="32"></a>
						<a href="https://www.youtube.com/" target="_blank"><img class="m-2" src="assets/youtube.svg"
								alt="Youtube" width="32" height="32"></a>
					</div>
					<div>
						<a class="btn btn-outline-warning m-2" style="border:none;" href="#">Encontranos</a>
						<a class="btn btn-outline-warning m-2" style="border:none;" href="#">Donar</a>
						<a class="btn btn-outline-warning m-2" style="border:none;" href="#">Estatuto</a>
					</div>
				</div>
			</section>
		</div>



	</footer>
	<!-- Bootstrap core JS-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<!-- Core theme JS-->
	<script src="js/scripts.js"></script>
	<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
	<!-- * *                               SB Forms JS                               * *-->
	<!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
	<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
	<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
		integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
		crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/slider.js"></script>
</body>

</html>
	