
<?php $__env->startSection('content'); ?>
<section class="my-5 py-5 checkout">
        <div class="container text-center mt-1 pt-5">
            <h2>Check Out</h2>
            <hr class="mx-auto">
        </div>

        <div class="mx-auto container">
            <form id="checkout-form" >
                
                <div class="form-group checkout-small-element">
                    <label for="">Name</label>
                    <input type="text" class="form-control" id="checkout-name" name="name" placeholder="name" required>
                </div>

                <div class="form-group checkout-small-element">
                    <label for="">Email</label>
                    <input type="email" class="form-control" id="checkout-email" name="email" placeholder="email address" required>
                </div>

                <div class="form-group checkout-small-element">
                    <label for="">Phone</label>
                    <input type="tel" class="form-control" id="checkout-phone" name="phone" placeholder="phone number" required>
                </div>

                <div class="form-group checkout-small-element">
                    <label for="">City</label>
                    <input type="text" class="form-control" id="checkout-city" name="city" placeholder="city" required>
                </div>

                <div class="form-group checkout-large-element">
                    <label for="">Address</label>
                    <input type="text" class="form-control" id="checkout-address" name="address" placeholder="address" required>
                </div>


                <?php if(Session::has('total')): ?>
                 <?php if(Session::get('total') != null): ?>

                <div class="form-group checkout-btn-container">
                    <p>Total amount: $<?php echo e(Session::get('total')); ?></p>
                    <input type="submit" class="btn" id="checkout-btn" name="checkout_btn" value="Checkout">
                </div>
                <?php endif; ?>
                <?php endif; ?>
            </form>
        </div>
    </section>


 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\progects\laravel\E-commerce-Website-Watches\resources\views/user/checkout&pay/checkout.blade.php ENDPATH**/ ?>