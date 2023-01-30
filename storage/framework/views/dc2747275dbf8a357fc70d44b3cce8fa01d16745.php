
<?php $__env->startSection('navitem'); ?>
<nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <?php if(isset($data[0]->name)): ?>
                        <li class="menu-active"><a href="#header">Home</a></li>
                        <li><a  href="<?php echo e(route('show-all-product')); ?>">Products</a></li>
                      
                  
                    <?php endif; ?>
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
<div class="container-fluid pt-5" style="height: 100%">
        <div class="container">
        
             

    <section class="cart container mt-2 my-3 py-5">
        <div class="container mt-2">
            <h4>Add in Your Cart</h4>
        </div>

        <table class="pt-5">
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>total</th>
            </tr>


         
                    <tr>
                        <td>
                            <div class="product-info">
                                <img src="<?php echo e(asset('asset/img/product-1.png')); ?>">
                                <div>
                                    <p><?php echo e($data->name); ?></p>
                                    <small><span>$</span><?php echo e($data->price); ?></small>
                                    <br>
                                    <form method="post" action=""> 
                                      
                                        <input type="submit" name="remove_btn" class="remove-btn" value="remove">
                                    </form>
                                </div>
                            </div>
                        </td>

                        <td>
                        <form method="post" action="<?php echo e(route('add-in-order')); ?>">
                <?php echo csrf_field(); ?>
                                <input type="number" id="quantity" name="quantity" value="1" min="1">
                               
                                
                           
                        </td>

                        <td>
                            $<span class="product-price" id="price"><?php echo e($data->price); ?></span>
                        </td>
                    </tr>
           

        </table>


        

        <div class="checkout-container">
       
           
               
                <input type="submit" class="btn checkout-btn" value="Add to order" name="">
            </form>
          
        
        </div>





    </section>

              
        
        </div>
    </div>
    <!-- Cart End -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script>
  var quantity=document.getElementById('quantity');
  quantity.addEventListener('change',()=>{
    document.getElementById('price').innerText=quantity.value*<?php echo e($data->price); ?>;
  })
      //  document.getElementById('price').innerText= $("input[name='quantity']").val();
   
  
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\progects\laravel\E-commerce-Website-Watches\resources\views/cart.blade.php ENDPATH**/ ?>