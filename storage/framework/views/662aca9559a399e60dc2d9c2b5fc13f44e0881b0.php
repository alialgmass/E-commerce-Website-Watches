
<?php $__env->startSection('content'); ?>
<body class="vertical-layout vertical-menu 1-column   menu-expanded blank-page blank-page"
      data-open="click" data-menu="vertical-menu" data-col="1-column">
<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section class="flexbox-container">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="col-md-4 col-10 box-shadow-2 p-0">
                        <div class="card border-grey border-lighten-3 m-0">
                            <div class="card-header border-0">
                                <div class="card-title text-center">
                                    <div class="p-1">
                                      
                                    </div>
                                </div>
                                <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                                    <span>الدخول للوحة التحكم </span>
                                </h6>
                            </div>

                           

                            <div class="card-content">
                                <div class="card-body">
                                    <form class="form-horizontal form-simple" action="<?php echo e(route('admin.login')); ?>" method="post"
                                          novalidate>
                                          <?php echo csrf_field(); ?>
                                        <fieldset class="form-group position-relative has-icon-left mb-0">
                                            <input type="text" name="email"
                                                   class="form-control form-control-lg input-lg"
                                                   value="" id="email" placeholder="أدخل البريد الالكتروني ">
                                            <div class="form-control-position">
                                                <i class="ft-user"></i>
                                            </div>

                                            <span class="text-danger"> </span>

                                        </fieldset>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="password" name="password"
                                                   class="form-control form-control-lg input-lg"
                                                   id="user-password"
                                                   placeholder="أدخل كلمة المرور">
                                            <div class="form-control-position">
                                                <i class="la la-key"></i>
                                            </div>
                                            <span class="text-danger"> </span>
                                        </fieldset>
                                        <div class="form-group row">
                                            <div class="col-md-6 col-12 text-center text-md-left">
                                                <fieldset>
                                                    <input type="checkbox" name="remember_me" id="remember-me"
                                                           class="chk-remember">
                                                    <label for="remember-me">تذكر دخولي</label>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-info btn-lg btn-block"><i
                                                class="ft-unlock"></i>
                                            دخول
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->
<!-- BEGIN VENDOR JS-->
<script src="<?php echo e(asset('asset/admin/vendors/js/vendors.min.js')); ?>" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script src="<?php echo e(asset('asset/admin/vendors/js/forms/icheck/icheck.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('asset/admin/vendors/js/forms/validation/jqBootstrapValidation.js')); ?>"
        type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN MODERN JS-->
<script src="<?php echo e(asset('asset/admin/js/core/app-menu.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('asset/admin/js/core/app.js')); ?>" type="text/javascript"></script>
<!-- END MODERN JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="<?php echo e(asset('asset/admin/js/scripts/forms/form-login-register.js')); ?>" type="text/javascript"></script>
<!-- END PAGE LEVEL JS-->

<script>

</script>
</body>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\progects\laravel\E-commerce-Website-Watches\resources\views/admin/admin_login_page.blade.php ENDPATH**/ ?>