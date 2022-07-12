<style>
.bg-image-vertical {
position: relative;
overflow: hidden;
background-repeat: no-repeat;
background-position: right center;
background-size: auto 100%;
}

@media (min-width: 1025px) {
.h-custom-2 {
height: 100%;
}
}
</style>
<script>
        // se oculta el header
        const cabecera = document.body.querySelector('#mainNav');
        cabecera.style.display = 'none' 
        
</script>

<section class="vh-100">
  <div class="container-fluid">
    <div class="row">
     
    <div class="col-sm-6 text-black">
        <div class="px-5 ms-xl-4">
        <img src="assets/Logo.png" id="logo" style="width: 140px; height: 80px;" alt= "fallo";>
         </div>

        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

          <form action="index.php?controller=login&action=compruebaLogin" method="post" style="width: 23rem;">

            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>

            <div class="form-outline mb-4">
              <input type="email" name="correo" placeholder="Username" class="form-control form-control-lg" />
              <!--label class="form-label" for="form2Example18">Email address</label-->
            </div>

            <div class="form-outline mb-4">
              <input type="password" name="pass" placeholder="Password"  class="form-control form-control-lg" />
              <!--label class="form-label" for="form2Example28">Password</label-->
            </div>

            <div class="pt-1 mb-4">
              <button class="btn btn-info btn-lg btn-block" type="submit">Login</button>
            </div>

            

          </form>

        </div>

      </div>
      <div class="col-sm-6 px-0 d-none d-sm-block">
        <img src="assets/img/noticias1.jpg"
          alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
      </div>
    </div>
  </div>
</section>