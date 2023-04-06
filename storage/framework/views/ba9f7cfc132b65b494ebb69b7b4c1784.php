<div class="nk-sidebar">
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label">Dashboard</li>
            <li>
                <a href="<?php echo e(route('admin.dashboard')); ?>" aria-expanded="false">
                    <i class="icon-badge menu-icon"></i><span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">Products</span>
                </a>
                <ul aria-expanded="false">
                    <li>
                        <a href="<?php echo e(route('admin.category.index')); ?>">Category</a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('admin.sub-category.index')); ?>">Sub Category</a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('admin.product.index')); ?>">Product</a>
                    </li>
                    <!-- <li><a href="./index-2.html">Home 2</a></li> -->
                </ul>
            </li>

            <li>
                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">Diseases</span>
                </a>
                <ul aria-expanded="false">
                    <li>
                        <a href="<?php echo e(route('admin.diseases-category.index')); ?>">Category</a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('admin.diseases-sub-category.index')); ?>">Sub Category</a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('admin.diseases.index')); ?>">Crop Diseases</a>
                    </li>
                    <!-- <li><a href="./index-2.html">Home 2</a></li> -->
                </ul>
            </li>

            <li>
                <a class="" href="<?php echo e(route('admin.subscriber.index')); ?>">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">Subscribers</span>
                </a>
            </li>
            <li>
                <a class="" href="<?php echo e(route('admin.carrier.index')); ?>">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">CV Bank</span>
                </a>
            </li>

            <li>
                <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                    <i class="icon-notebook menu-icon"></i><span class="nav-text">Settings</span>
                </a>
                <ul aria-expanded="false">
                    <li>
                        <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">Home Page Setting</a>
                        <ul aria-expanded="false">
                            <a href="<?php echo e(route('admin.slider.index')); ?>">Sliders</a>
                            <a href="<?php echo e(route('admin.about-setting')); ?>">About us</a>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">Others Setting</a>
                        <ul aria-expanded="false">
                            <a href="<?php echo e(route('admin.others.carrer')); ?>">Carrer</a>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo e(route('admin.footer.setting')); ?>">Footer</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<?php /**PATH G:\Milon Kumar Tailwind Css\Laravel\The Camical Project\Agriculture\resources\views/backend/admin/includes/sidebar.blade.php ENDPATH**/ ?>