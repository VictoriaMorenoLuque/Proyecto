<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Calendario</title>
  <!-- CSRF Token -->
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />

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
  <!-- <script src="<?php echo e(asset('js/app.js')); ?>" defer></script> -->

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->
  <!-- <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet"> -->
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark gradient-custom">
    <div class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="col-1">
          </div>
          <div class="col-10">
            <!-- <h3 class="navbar-brand">Bienvenido/a <?php echo e(Auth::user()->name); ?></h3> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item text-center mx-2 mx-lg-1">
                  <a class="nav-link" aria-current="page" href="<?php echo e(url('/index')); ?>">
                    <div>
                      <i class="fa fa-home" aria-hidden="true"></i>
                    </div>
                    Inicio
                  </a>
                </li>
                <?php if(auth()->user()->role == "Alumno/a"){ ?>
                <li class="nav-item text-center mx-2 mx-lg-1">
                  <a class="nav-link" aria-current="page" href="<?php echo e(url('/posts')); ?>">
                    <div>
                      <i class="fa fa-picture-o" aria-hidden="true"></i>
                    </div>Herbario
                  </a>
                </li>
                <?php }else{ ?>
                  <li class="nav-item text-center mx-2 mx-lg-1">
                  <a class="nav-link" aria-current="page"  href="<?php echo e(url('/users')); ?>">
                    <div>
                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                    </div>Alumnos/as
                  </a>
                </li>
                <?php } ?>
                <li class="nav-item text-center mx-2 mx-lg-1">
                  <a class="nav-link" aria-current="page" href="<?php echo e(url('/map')); ?>">
                    <div>
                      <i class="fa fa-location-arrow" aria-hidden="true"></i>
                    </div>Localización
                  </a>
                </li>
                <li class="nav-item text-center mx-2 mx-lg-1">
                  <a class="nav-link active" aria-current="page" href="<?php echo e(url('/fullcalender')); ?>">
                    <div>
                      <i class="fa fa-calendar" aria-hidden="true"></i>
                    </div>Calendario
                  </a>
                </li>
              </ul>

              <!-- Right navbar links -->
              <ul class="navbar-nav ml-auto d-flex">
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item text-center mx-2 mx-lg-1">
                  <a class="nav-link active" aria-current="page" href="<?php echo e(route('messages.index')); ?>">
                    <div>
                      <i class="fa fa-comments" aria-hidden="true"></i>
                    </div>
                  </a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link active" aria-current="page" href="<?php echo e(url('messages/create')); ?>">
                    <div>
                      <i class="fa fa-envelope" aria-hidden="true"></i>
                    </div>
                  </a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link active" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell" aria-hidden="true"></i>
                    <?php if(count(auth()->user()->unreadNotifications)): ?>
                    <span class="badge badge-warning"><?php echo e(count(auth()->user()->unreadNotifications)); ?></span>
                    <?php endif; ?>
                    </span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-header">Notificaciones no leidas</span>
                    <?php $__empty_1 = true; $__currentLoopData = auth()->user()->unreadNotifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <a href="#" class="dropdown-item">
                      <i class="fa fa-envelope-o" aria-hidden="true"></i> <?php echo e($notification->data['title']); ?>

                      <span class="ml-2 pull-right text-muted text-sm"><?php echo e($notification->created_at->diffForHumans()); ?></span>
                    </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <?php endif; ?>

                    <div class="dropdown-divider"></div>
                    <span class="dropdown-header">Notificaciones leidas</span>
                    <?php $__empty_1 = true; $__currentLoopData = auth()->user()->readNotifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <a href="#" class="dropdown-item">
                      <i class="fa fa-file-o" aria-hidden="true"></i> <?php echo e($notification->data['description']); ?>

                      <span class="ml-2 pull-right text-muted text-sm"><?php echo e($notification->created_at->diffForHumans()); ?></span>
                    </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <?php endif; ?>
                    <div class="dropdown-divider"></div>
                    <a href="/markAsRead" class="dropdown-item dropdown-footer">Marcar todas las notificaciones como leidas</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle active" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                      <i class="fa fa-power-off" aria-hidden="true"></i> <?php echo e(__('Cerrar sesión')); ?>

                    </a>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                      <?php echo csrf_field(); ?>
                    </form>
                  </div>
                </li>
              </ul>
              <!-- <form method="POST" action="<?php echo e(route('logout')); ?>" class="d-flex">
          <?php echo csrf_field(); ?>
          <button class="btn-close" aria-label="Close">
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.dropdown-link','data' => ['href' => route('logout'),'onclick' => 'event.preventDefault();
                            this.closest(\'form\').submit();']]); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('logout')),'onclick' => 'event.preventDefault();
                            this.closest(\'form\').submit();']); ?>
             <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
          </button>
        </form> -->
            </div>
            <div class="col-1">
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <div class="container">
    <?php echo $__env->yieldContent('contenido'); ?>
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

</html><?php /**PATH C:\xampp\htdocs\Proyecto\herbario\resources\views/layouts/plantillabase3.blade.php ENDPATH**/ ?>