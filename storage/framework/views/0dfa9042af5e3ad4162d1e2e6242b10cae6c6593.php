<html/>
<head>

        <meta charset="utf-8">
        <title>WATCH - Store</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Product Landing Page" name="keywords">
        <meta content="Product Landing Page" name="description">

        <!-- Favicon -->
        <link href="<?php echo e(asset('asset/img/favicon.ico')); ?>" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400|Quicksand:500,600,700&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="<?php echo e(asset('asset/lib/owlcarousel/assets/owl.carousel.min.css')); ?>" rel="stylesheet">

        <!-- Template Stylesheet -->
      
        <link href="<?php echo e(asset('asset/css/style.css')); ?>" rel="stylesheet">
    <!-- Scripts -->
   
    </head>

    <body>

   

        <!-- Nav Start -->
        <div id="nav">
            <div class="container-fluid">
                <div id="logo" class="pull-left">
                    <a href="<?php echo e(route('index')); ?>"><img src="<?php echo e(asset('asset/img/logo.png')); ?>" alt="Logo" /></a>
                </div>

               <nav id="nav-menu-container">
                    <ul class="nav-menu">
                       
                        <li class=""><a  href="<?php echo e(route('index')); ?>">Home</a></li>
                        <li><a href="">Cart</a></li>
                  
                   
                    <?php if(auth()->guard()->guest()): ?>
                            <?php if(Route::has('login')): ?>
                                <li class="">
                                    <a class="" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                                </li>
                            <?php endif; ?>

                            <?php if(Route::has('register')): ?>
                                <li class="">
                                    <a class="" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  <?php echo e(explode(" ",Auth::user()->name)[0]); ?>

                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </nav>

            </div>
        </div>
        <!-- Nav End -->
        
       
        <?php echo $__env->yieldContent('content'); ?>
             <!-- FAQ Start -->


        <!-- Footer Start -->
        <div id="footer">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <p>&copy; Copyright <a href="http://calmandcode.com">CalmAndCode</a>. All Rights Reserved</p>
                    </div>
                    <div class="col-md-6">
                        <p>Template by <a href="">CalmAndCode</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
          <script src="<?php echo e(asset('asset/lib/easing/easing.min.js')); ?>"></script>
        <script src="<?php echo e(asset('asset/lib/menuspy/menuspy.min.js')); ?>"></script>
        <script src="<?php echo e(asset('asset/lib/owlcarousel/owl.carousel.min.js')); ?>"></script>

        <!-- Template Javascript -->
      <script src="<?php echo e(asset('asset/js/main.js')); ?>"></script>
      <?php echo $__env->yieldContent('script'); ?>
    </body>
</html>
<?php /**PATH E:\progects\laravel\E-commerce-Website-Watches\resources\views/layouts/layout.blade.php ENDPATH**/ ?>