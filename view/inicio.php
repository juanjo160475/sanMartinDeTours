
   <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Fundación San Martín de Tours</title>
    <link rel="icon" type="image/x-icon" href="assets/SMDTIcon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />
    <!-- CSS Bootstrap y Página-->
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="bootstrap.css"/>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
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
                    <li class="nav-item"><a class="nav-link" href="index.php?controller=cursos&action=list">Cursos</a></li>
                    <li class="nav-item"><a class="nav-link" href="">Noticias</a></li>
                </ul>
                <form class="d-flex" action="index.php?controller=login&action=compruebaLogin" method="post">
                    <input class="form-control me-2" type="text" name="correo" placeholder="Username" />
                    <input class="form-control me-2" type="password" name="pass" placeholder="Password" />
                    <button class="btn btn-warning" type="submit">Login</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="bannersmdt">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <h1 class="mx-auto my-0 text-uppercase">San Martín de Tours</h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">Lorem</h2>
                    <a class="btn btn-primary" href="#slideMVV">Comenzar</a>
                </div>
            </div>
        </div>
    </header>
    <!-- Quienes somos-->
    <section class="quienes-somos text-center" id="about">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <div class="container" id="slideMVV">
            <div class="slider">
                <div class="slider--el slider--el-1 anim-4parts active">
                    <div class="slider--el-bg">
                        <div class="part top left"></div>
                        <div class="part top right"></div>
                        <div class="part bot left"></div>
                        <div class="part bot right"></div>
                    </div>
                    <div class="slider--el-content">
                        <div class="contenedor">
                            <h2 class="slider--el-heading">Misión</h2>
                            <h3 class="slider--el-text">Promover, asesorar, estudiar, investigar y difundir
                                todas
                                las disciplinas que tengan relacion con la educacion, la cultura, el arte, el
                                turismo, el deporta, la salud, la economia, la tecnologia, la proteccion del
                                medio
                                ambiente, y el desarrollo de la vida humana, la mejora en lo individual en lo
                                colectivo y en lo social, en el medio ambiente en general y en el habitar
                                particular, apoyando las actividades que realiza la comunidad.</h3>
                        </div>
                    </div>
                </div>
                <div class="slider--el slider--el-2 anim-9parts">
                    <div class="slider--el-bg">
                        <div class="part left-top"></div>
                        <div class="part mid-top"></div>
                        <div class="part right-top"></div>
                        <div class="part left-mid"></div>
                        <div class="part mid-mid"></div>
                        <div class="part right-mid"></div>
                        <div class="part left-bot"></div>
                        <div class="part mid-bot"></div>
                        <div class="part right-bot"></div>
                    </div>
                    <div class="slider--el-content">
                        <h2 class="slider--el-heading">Visión</h2>
                        <h3 class="slider--el-text">Ser una organizacion reconocida por contribuir a satisfacer
                            las
                            necesidades en el bienestar y el desarrollo de las comunidades, tanto de la sociedad
                            como la familia en general y de os demas individuos en particular.</h3>
                    </div>
                </div>
                <div class="slider--el slider--el-3 anim-3parts">
                    <div class="slider--el-bg">
                        <div class="part left"></div>
                        <div class="part mid"></div>
                        <div class="part right"></div>
                    </div>
                    <div class="slider--el-content">
                        <h2 class="slider--el-heading">Valores</h2>
                        <h3 class="slider--el-text">
                            <ul>
                                <li>Solidaridad: Brindar su colaboracion y apoyo a los miembros de la sociedad.
                                    Empatia: Saber de las necesidades y preocupaciones de la comunidad
                                    indentificandose con los mas necesitados. </li>
                                <li>Respeto: Comprender y aceptar a los demas individuos, tanto su forma de ser
                                    como
                                    sus opiniones, creencias y actitudes.</li>
                                <li>Creer en el trabajo en equipo y en la colaboracion con otras organozaciones
                                    e
                                    instituciones para potenciar sinergias y mejorar el rendimiento de nuestro
                                    trabajo. </li>
                            </ul>
                        </h3>
                    </div>
                </div>
                <span class="slider--control left"></span>
                <span class="slider--control right" id="rightbtn"></span>
            </div>
        </div>
    </section>
    <!-- Historia-->
    <section class="projects-section bg-light">
        <div class="container px-4 px-lg-5">
            <!-- Featured Project Row-->
            <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/img/smdt.jpg"
                        alt="..." /></div>
                <div class="col-xl-4 col-lg-5">
                    <div class="featured-text text-center text-lg-left">
                        <h4>Nuestra historia</h4>
                        <p class="text-black-50 mb-0">Surgió como una idea de quien la preside, el sr Miranda, Marino Humberto, alrededor del año 2000 y luego la presentó a los sacerdotes jesuitas, que por entonces estaban en la parroquia 
                            San José Obrero de Salta Capital. Estos vieron con total agrado el proyecto y dieron su bendición y consejos para emprender esta tarea solidaria. 
                            Se comenzó a trabajar y la idea fue tomando forma hasta que se plasmó en los papeles en Julio de 2014 cuando se presentó en la Inspección General De Personas Jurídicas De Salta (IGPJS). Finalmente, en octubre de ese mismo año se obtuvo la personería jurídica y desde entonces, todo fue trabajo y aprendizaje pasando tanto por momentos alegres como no tan alegres. Muchas personas fueron convocadas a participar del proyecto para formar parte del equipo de trabajo, unificando criterios y construyendo la unidad en pos de alcanzar los objetivos de la fundación.</p>
                    </div>
                </div>
            </div>

    </section>
    <!-- Contacto-->
    <section class="bg-black">
        <div class="container">
            <div class="row text-center">
                <h1 class="mt-5 mb-5">Contáctanos</h1>
            </div>
            <form id="form" action="https://submit-form.com/rnLawael">
                <div class="row">
                    <div class="col">
                        <label for="name">Name</label>
                    </div>
                    <div class="col">
                        <label for="email">Email</label>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="text" id="name" name="name" placeholder="Name" required="" />
                        </div>
                        <div class="col">
                            <input type="email" id="email" name="email" placeholder="Email" required="" />
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col"><textarea id="message" name="message" placeholder="Message" required=""></textarea>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col" id="boton">
                        <button type="submit" class="w-100 btn text-white mb-5"
                            style="background-color: #91be26">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Signup-->
    <section class="signup-section" id="signup">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-10 col-lg-8 mx-auto text-center">
                    <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                    <h1 class="text-white mb-5">Newsletter</h1>
                    <h2 class="text-white mb-5">Suscribite para recibir novedades:</h2>
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- * * SB Forms Contact Form * *-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- This form is pre-integrated with SB Forms.-->
                    <!-- To make this form functional, sign up at-->
                    <!-- https://startbootstrap.com/solution/contact-forms-->
                    <!-- to get an API token!-->
                    <form class="form-signup" id="contactForm" data-sb-form-api-token="API_TOKEN">
                        <!-- Email address input-->
                        <div class="row input-group-newsletter">
                            <div class="col"><input class="form-control" id="emailAddress" type="email"
                                    placeholder="Enter email address..." aria-label="Enter email address..."
                                    data-sb-validations="required,email" /></div>
                            <div class="col-auto"><button class="btn btn-primary disabled" id="submitButton"
                                    type="submit">Notify Me!</button></div>
                        </div>
                        <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:required">An email is
                            required.</div>
                        <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:email">Email is not valid.
                        </div>
                        <!-- Submit success message-->
                        <!---->
                        <!-- This is what your users will see when the form-->
                        <!-- has successfully submitted-->
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3 mt-2 text-white">
                                <div class="fw-bolder">Form submission successful!</div>
                                To activate this form, sign up at
                                <br />
                                <a
                                    href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                            </div>
                        </div>
                        <!-- Submit error message-->
                        <!---->
                        <!-- This is what your users will see when there is-->
                        <!-- an error submitting the form-->
                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3 mt-2">Error sending message!</div>
                        </div>
                    </form>
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
</body>

</html>