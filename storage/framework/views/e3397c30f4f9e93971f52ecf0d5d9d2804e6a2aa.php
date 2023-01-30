
<?php $__env->startSection('navitem'); ?>

<nav id="nav-menu-container">
                    <ul class="nav-menu">
                       
                        <li class="menu-active"><a  href="<?php echo e(route('index')); ?>">Home</a></li>
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

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div id="products">
            <div class="container">
                <div class="section-header">
                    <h2>Get Your Products</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra at massa sit amet ultricies
                    </p>
                </div>
                
                  
               
              
                
                <div class="row align-items-center">
                    <?php if(isset($data)): ?>
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
                
              
            

            </div>
        </div>
        <!-- Products End -->
        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\progects\laravel\E-commerce-Website-Watches\resources\views/all_products.blade.php ENDPATH**/ ?>