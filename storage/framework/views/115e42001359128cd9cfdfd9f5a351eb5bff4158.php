
<!-- Begin SideBar-->
<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <li class="nav-item active"><a href="<?php echo e(route('admin')); ?>"><i class="la la-mouse-pointer"></i><span
                        class="menu-title" data-i18n="nav.add_on_drag_drop.main">الرئيسية </span></a>
            </li>
            <li class="nav-item"><a href="<?php echo e(route('admin.product')); ?>"><i class="la la-home"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">product</span>
                    <span
                        class="badge badge badge-info badge-pill float-right mr-2"></span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="<?php echo e(route('admin.product')); ?>"
                                          data-i18n="nav.dash.ecommerce"> show all</a>
                    </li>
                    <li><a class="menu-item" href="<?php echo e(route('admin.product.create')); ?>" data-i18n="nav.dash.crypto">
                        Add new product</a>
                    </li>
                  
                </ul>
            </li>
</ul>
</div>
</div>
<?php /**PATH E:\progects\laravel\E-commerce-Website-Watches\resources\views/admin/includes/sidebar.blade.php ENDPATH**/ ?>