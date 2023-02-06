


<?php $__env->startSection('content'); ?>

 <!-- Cart Start -->
    <div class="container-fluid pt-5">
        <div class="container">
        
             

    <section class="cart container mt-2 my-3 py-5">
        <div class="container mt-2">
            <h4>Your Cart</h4>
        </div>

        <table class="pt-5">
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>


            <?php if(isset($data)): ?>

               <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <tr>
                        <td>
                            <div class="product-info">
                                <img style="width: 75px; height: 75px" src="">
                                <div>
                                    <p><?php echo e($d->product->name); ?></p>
                                    <small><span>$</span><?php echo e($d->product->sale_price); ?></small>
                                    <br>
                                    <form>
                                        
                                        <input type="submit" name="remove_btn" class="remove-btn" value="remove">
                                    </form>
                                </div>
                            </div>
                        </td>

                        <td>
                            <form>
                                <input type="text" name="quantity" value="<?php echo e($d['quantity']); ?>" readonly>
                               
                                <input type="submit" value="edit" class="edit-btn" name="edit_product_quantity_btn">
                            </form>
                        </td>

                        <td>
                            <span class="product-price">$ <?php echo e($d['quantity'] * $d->product->sale_price); ?></span>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 

              

        </table>


        <div class="cart-total">
            <table>
              
                <tr>
                       <td>Total</td>
                 
                       <td><?php echo e($data->total); ?></td>
                 
                </tr>
             
            </table>
        </div>
        
        
        <?php endif; ?> 
        <div class="checkout-container">

            <form method="get" action="<?php echo e(route('checkout')); ?>">
                <input type="submit" class="btn checkout-btn" value="Checkout" name="">
            </form>
           
        </div>





    </section>

              
        
        </div>
    </div>
    <!-- Cart End -->




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\progects\laravel\E-commerce-Website-Watches\resources\views/cart_index.blade.php ENDPATH**/ ?>