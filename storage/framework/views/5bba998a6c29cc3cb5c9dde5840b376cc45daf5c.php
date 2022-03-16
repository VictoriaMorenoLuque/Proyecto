<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet" type='text/css'>

  <!--Bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <!-- Styles -->
  <style>
    body {
      font-family: 'Nunito', sans-serif;
    }

    .gradient-custom {
      /* fallback for old browsers */
      background: #f6d365;

      /* Chrome 10-25, Safari 5.1-6 */
      background: -webkit-linear-gradient(to right bottom, rgba(35, 155, 86, 1), rgba(88, 214, 141, 1));

      /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      background: linear-gradient(to right bottom, rgba(35, 155, 86, 1), rgba(88, 214, 141, 1))
    }

    footer {
      position: fixed;
      left: 0;
      bottom: 0;
      width: 100%;
      text-align: center;
    }
  </style>

  <!-- CSRF Token -->
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

  <title><?php echo e(config('app.name', 'Laravel')); ?></title>

  <!-- Scripts -->
  <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->
  <!-- <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet"> -->
</head>

<body>
  <nav class="navbar navbar-light navbar-dark gradient-custom">
    <div class="container-fluid">
      <a class="navbar-brand"></a>
      <form class="d-flex">
        <?php if(Route::has('login')): ?>
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
          <?php if(auth()->guard()->check()): ?>
          <a href="<?php echo e(url('/dashboard')); ?>" class="btn btn-light" role="button">Dashboard</a>
          <?php else: ?>
          <a href="<?php echo e(route('login')); ?>" class="btn btn-light" role="button">Identificarse</a>

          <?php if(Route::has('register')): ?>
          <a href="<?php echo e(route('register')); ?>" class="btn btn-light" role="button">Registrase</a>
          <?php endif; ?>
          <?php endif; ?>
        </div>
        <?php endif; ?>
      </form>
    </div>
  </nav>
  <br /><br /><br /><br />
  <div class="container">
    <div class="row">
      <div class="col-sm-12  text-center">
        <!-- <img src="herbario\images\herbario.png" class="img-fluid" alt="Responsive image">     -->
        <h1 class=center>Herbar.io</h1>
        <h3>Aplicación digital para crear tu propio herbario</h3>
      </div>
    </div>
  </div>
  <br><br>
  <footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fa fa-facebook" aria-hidden="true"></i></i></a>

        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fa fa-twitter" aria-hidden="true"></i></a>

        <!-- Google -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fa fa-google" aria-hidden="true"></i></a>

        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fa fa-instagram" aria-hidden="true"></i></a>

        <!-- Linkedin -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fa fa-linkedin" aria-hidden="true"></i></i></a>

        <!-- Github -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fa fa-github" aria-hidden="true"></i></i></a>
      </section>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
  </footer>
</body>

</html><?php /**PATH C:\xampp\htdocs\Proyecto\herbario\resources\views/welcome.blade.php ENDPATH**/ ?>