
<?php $__env->startSection('navitem'); ?>

<nav id="nav-menu-container">
                    <ul class="nav-menu">
                     
                        <li class="menu-active"><a href="#header">Home</a></li>
                        <li><a  href="<?php echo e(route('show-all-product')); ?>">Products</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="#testimonials">Reviews</a></li>
                        <li><a href="">Cart</a></li>
                  
                 
                    <?php if(auth()->guard()->guest()): ?>
                            <?php if(Route::has('login')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                                </li>
                            <?php endif; ?>

                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item dropdown ">
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

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
 <!-- Header Start-->
 <div id="header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <div class="header-content">
                            <h2><span>WATCH</span> is the best <span>Landing Page</span> to showcause your product</h2>
                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span>Android and iOS Support</li>
                                <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span>GPS & Health Tracker</li>
                                <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span>Read & reply to messages</li>
                                <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span>Compatible with all devices</li>
                            </ul>
                            <a class="btn" href="#">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="header-img">
                            <img src="<?php echo e(asset('asset/img/watch-header.png')); ?>" alt="Product Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End-->
         
        <!-- Feature Start-->
        <div id="feature">
            <div class="container">
                <div class="section-header">
                    <h2>Product Features</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra at massa sit amet ultricies
                    </p>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <div class="product-feature">
                            <div class="product-content">
                                <h2>Innovative technology</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit egestas</p>
                            </div>
                            <div class="product-icon">
                                <i class="fa fa-lightbulb"></i>
                            </div>
                        </div>
                        <div class="product-feature">
                            <div class="product-content">
                                <h2>Fast and secure</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit egestas</p>
                            </div>
                            <div class="product-icon">
                                <i class="fa fa-key"></i>
                            </div>
                        </div>
                        <div class="product-feature">
                            <div class="product-content">
                                <h2>Easy to operate</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit egestas</p>
                            </div>
                            <div class="product-icon">
                                <i class="fa fa-thumbs-up"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product-img">
                            <img src="<?php echo e(asset('asset/img/watch-features.png')); ?>" alt="Product Image">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product-feature">
                            <div class="product-icon">
                                <i class="fa fa-map-marker-alt"></i>
                            </div>
                            <div class="product-content">
                                <h2>GPS Tracking</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit egestas</p>
                            </div>
                        </div>
                        <div class="product-feature">
                            <div class="product-icon">
                                <i class="fa fa-heartbeat"></i>
                            </div>
                            <div class="product-content">
                                <h2>Heartbeat Analysis</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit egestas</p>
                            </div>
                        </div>
                        <div class="product-feature">
                            <div class="product-icon">
                                <i class="fa fa-crown"></i>
                            </div>
                            <div class="product-content">
                                <h2>Gorgeous color</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit egestas</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End-->

        <!-- Process Start-->
        <div id="process">
            <div class="container">
                <div class="section-header">
                    <h2>How It Works</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra at massa sit amet ultricies
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="process-col">
                            <i class="fa fa-plug"></i>
                            <h2>Connect Device</h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipiscing elit. In sed lorem efficitur vestibulum erat finibus
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="process-col">
                            <i class="fa fa-sliders-h"></i>
                            <h2>Configure it</h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipiscing elit. In sed lorem efficitur vestibulum erat finibus
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="process-col">
                            <i class="fa fa-check"></i>
                            <h2>Done. Enjoy!!!</h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipiscing elit. In sed lorem efficitur vestibulum erat finibus
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Process End-->
        
        
        <!-- Products Start -->
        <div id="products">
            <div class="container">
                <div class="section-header">
                    <h2>Get Your Products</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra at massa sit amet ultricies
                    </p>
                </div>
                
                  
               
              
                
                <div class="row align-items-center">
                    <?php if(isset($data[0])): ?>
                  <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <a href="<?php echo e(route('show-product',$d->id)); ?>">
                    <div class="col-md-3">
                        <div class="product-single">
                            <div class="product-img">
                                <img src="<?php echo e(asset('asset/img/product-1.png')); ?>" alt="Product Image">
                            </div>
                            <div class="product-content">
                                <h2> <?php echo e($d->name); ?></h2>
                                <h3>$<?php echo e($d->price); ?></h3>
                               
                                <a class="btn" href="<?php echo e(route('add-in-cart',$d->id)); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('add-in-cart').submit();">
                                       buy now
                                    </a>

                                    <form id="add-in-cart" action="<?php echo e(route('add-in-cart',$d->id)); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                            </div>
                        </div>
                    </div>
</a>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                  
                    
                </div>
                
              
                <div class="mt-5 text-center"><a href="<?php echo e(route('show-all-product')); ?>" class="btn btn-primary">show more</a></div>

            </div>
        </div>
        <!-- Products End -->
        
        
        <!-- Testimonials Start -->
        <div id="testimonials">
            <div class="container">
                <div class="section-header">
                    <h2>99.99% Positive Reviews</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra at massa sit amet ultricies
                    </p>
                </div>
                <div class="owl-carousel testimonials-carousel">
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="<?php echo e(asset('asset/img/testimonial-1.jpg')); ?>" alt="">
                        </div>
                        <div class="testimonial-content">
                            <h3>Christopher Heath</h3>
                            <h4>Science technician</h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipiscing elit massa sit amet
                            </p>
                        </div>
                    </div>

                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="<?php echo e(asset('asset/img/testimonial-1.jpg')); ?>" alt="">
                        </div>
                        <div class="testimonial-content">
                            <h3>Mollie White</h3>
                            <h4>Youtuber</h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipiscing elit massa sit amet
                            </p>
                        </div>
                    </div>

                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="<?php echo e(asset('asset/img/testimonial-3.jpg')); ?>" alt="">
                        </div>
                        <div class="testimonial-content">
                            <h3>Tom McKenzie</h3>
                            <h4>Videographer</h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipiscing elit massa sit amet
                            </p>
                        </div>
                    </div>
                    
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="<?php echo e(asset('asset/img/testimonial-1.jpg')); ?>" alt="">
                        </div>
                        <div class="testimonial-content">
                            <h3>Ruby Forster</h3>
                            <h4>Photographer</h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipiscing elit massa sit amet
                            </p>
                        </div>
                    </div>
                    
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="<?php echo e(asset('asset/img/testimonial-5.jpg')); ?>" alt="">
                        </div>
                        <div class="testimonial-content">
                            <h3>Leo Conway</h3>
                            <h4>Relationship manager</h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipiscing elit massa sit amet
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonials End -->
        
        
        <!-- FAQ Start -->
        <div id="faqs">
            <div class="container">
                <div class="section-header">
                    <h2>Quick FAQs</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra at massa sit amet ultricies
                    </p>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <div id="accordion">
                            <div class="card">
                                <div class="card-header">
                                    <span>1</span>
                                    <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                        Lorem ipsum dolor sit amet?
                                    </a>
                                </div>
                                <div id="collapseOne" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras felis nisi, sagittis quis arcu eu, luctus cursus ante. Nullam nec diam vitae dolor porta ullamcorper. Duis condimentum ante urna, quis scelerisque velit bibendum eu.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <span>2</span>
                                    <a class="card-link" data-toggle="collapse" href="#collapseTwo">
                                        Maecenas libero magna accumsan quis?
                                    </a>
                                </div>
                                <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        Maecenas libero magna, accumsan quis urna a, malesuada dictum risus. Duis placerat interdum sodales. Vivamus nec dignissim urna. Nulla tempor enim at viverra tempor.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <span>3</span>
                                    <a class="card-link" data-toggle="collapse" href="#collapseThree">
                                        Vivamus condimentum pharetra odio at efficitur?
                                    </a>
                                </div>
                                <div id="collapseThree" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        Vivamus condimentum pharetra odio at efficitur. Pellentesque condimentum erat a sapien maximus, sed tincidunt ante consectetur. In pulvinar blandit sagittis. Fusce a lorem eleifend, ornare sem eu, faucibus ligula.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <span>4</span>
                                    <a class="card-link" data-toggle="collapse" href="#collapseFour">
                                        Mauris nec auctor sem?
                                    </a>
                                </div>
                                <div id="collapseFour" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        Mauris nec auctor sem. In eu dui euismod, bibendum ex id, congue enim. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <span>5</span>
                                    <a class="card-link" data-toggle="collapse" href="#collapseFive">
                                        Aliquam massa purus fringilla sit amet eros sed?
                                    </a>
                                </div>
                                <div id="collapseFive" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        Aliquam massa purus, fringilla sit amet eros sed, commodo consequat magna.
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                    
                    <div class="col-md-5">
                        <div class="contact-info">
                            <h2>Get in Touch</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra at massa sit amet ultricies
                            </p>
                            <h3><i class="fa fa-map-marker"></i>123 Trade Tower, Los Angeles, CA, USA</h3>
                            <h3><i class="fa fa-envelope"></i>email@example.com</h3>
                            <h3><i class="fa fa-phone"></i>+123-456-7890</h3>
                            <a class="btn" href="#">Contact Us</a>
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook"></i></a>
                                <a href=""><i class="fab fa-linkedin"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                                <a href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FAQ Start -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\progects\laravel\E-commerce-Website-Watches\resources\views/prouduct.blade.php ENDPATH**/ ?>