	<section>
		<div id="slider" class="container-fluid headercursos">
			<div class="row">
				<h1 class="text-center"><b>Los más populares</b></h1>
				<div class="slider">
					<div class="owl-carousel">
						<div class="slider-card">
							<div class="d-flex justify-content-center align-items-center mb-4">
								<img src="assets/img/cursos/durlock.jpg" alt="">
							</div>
							<h5 class="mb-0 text-center"><b>Durlock</b></h5>
							<p class="text-center p-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
								Ipsam
								temporibus quidem magni qui doloribus quasi natus inventore nisi velit minima.</p>
							<div class="card-read-more">
								<a href="" class="btn btn-link btn-block w-100">
									Inscribirme
								</a>
							</div>
						</div>
						<div class="slider-card">
							<div class="d-flex justify-content-center align-items-center mb-4">
								<img src="assets/img/cursos/electricidad.jpg" alt="">
							</div>
							<h5 class="mb-0 text-center"><b>Electricidad</b></h5>
							<p class="text-center p-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
								Ipsam
								temporibus quidem magni qui doloribus quasi natus inventore nisi velit minima.</p>
							<div class="card-read-more">
								<a href="" class="btn btn-link btn-block w-100">
									Inscribirme
								</a>
							</div>
						</div>
						<div class="slider-card">
							<div class="d-flex justify-content-center align-items-center mb-4">
								<img src="assets/img/cursos/cripto.jpg" alt="">
							</div>
							<h5 class="mb-0 text-center"><b>Crypto</b></h5>
							<p class="text-center p-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
								Ipsam
								temporibus quidem magni qui doloribus quasi natus inventore nisi velit minima.</p>
							<div class="card-read-more">
								<a href="" class="btn btn-link btn-block w-100">
									Inscribirme
								</a>
							</div>
						</div>
						<div class="slider-card">
							<div class="d-flex justify-content-center align-items-center mb-4">
								<img src="assets/img/cursos/albañil.jpg" alt="">
							</div>
							<h5 class="mb-0 text-center"><b>Albañileria</b></h5>
							<p class="text-center p-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
								Ipsam
								temporibus quidem magni qui doloribus quasi natus inventore nisi velit minima.</p>
							<div class="card-read-more">
								<a href="" class="btn btn-link btn-block w-100">
									Inscribirme
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>
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
						<script>
					        var buttonUp = () => {
							const input = document.querySelector(".searchbox-input");
							const cards = document.getElementsByClassName("card");
							let filter = input.value
							for (let i = 0; i < cards.length; i++) {
								let title = cards[i].querySelector(".card-body");
								if (title.innerText.indexOf(filter) > -1) {
									cards[i].classList.remove("d-none")
								} else {
									cards[i].classList.add("d-none")
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
	