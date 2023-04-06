<style>
    #myDropdownMenu{
        display: none;
        transition: 0.2s all ease-in-out;
    }
    #myDropdown:hover #myDropdownMenu{
        display: block;
        transition: 0.2s all ease-in-out;
    }
</style>
<header class="header-section">
    <div class="upper">
        <div class="middle-bar hidden-sm hidden-xs">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php echo e(route('home')); ?>">
                        <img style="width: 65px;float: left;" src="<?php echo e(asset('/')); ?>assets/frontend/images/logo_circle.png" alt="image">
                        <h3 style="display: inline-block;
    font-weight: bold;
    line-height: 70px;
    font-size: 34px;
" class="d-inline-block text-uppercase"><?php echo app('translator')->get('public.logo_text'); ?></h3>
                    </a>
                </div>
            </div>
        </div> <!-- middle-bar -->
    </div>

    <nav class="navbar navbar-inverse nav-One hidden-sm hidden-xs">
        <div class="container">
            <div class="collapse navbar-collapse">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php echo e(route('home')); ?>">
                        <img style="width: 65px;padding: 0 !important;" src="<?php echo e(asset('/')); ?>assets/frontend/images/logo_circle.png" alt="image">
                    </a>
                </div>

                <ul class="nav navbar-nav nav-one text-uppercase">
                    <li class="<?php echo e(Route::is('home') ? 'active' :''); ?>">
                        <a href="<?php echo e(route('home')); ?>"><?php echo e(__('public.about_us')); ?></a>
                    </li>
                    <li class="<?php echo e(Route::is('list-product') ? 'active' :''); ?>">
                        <a href="<?php echo e(route('list-product')); ?>"><?php echo e(__('public.product_list')); ?></a>
                    </li>

                    <?php
                        $categories = \App\Models\Category::where('status',1)->get();
                    ?>

                    <li class="<?php echo e(Route::is('category-product') || Route::is('subcategory-product') ? 'active' : ''); ?> dropdown"><a href="#"><?php echo e(__('public.product_service')); ?> <?php if($categories->count() > 0): ?><i class="fa fa-angle-down" aria-hidden="true"></i><?php endif; ?></a>
                        <?php if($categories->count() > 0): ?>
                            <ul class="dropdown-menu">
                                <?php if(Session::get('locale') == 'en'): ?>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li>
                                            <a href="<?php echo e(route('category-product',optional($category)->slug)); ?>">
                                                <?php echo e($category->en_name); ?>

                                                <?php if(optional($category->subCategories)->count() > 0): ?>
                                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                                <?php endif; ?>
                                            </a>
                                            <?php if(optional($category->subCategories)->count() > 0): ?>
                                                <ul class="single-dropdown">
                                                    <?php $__currentLoopData = $category->subCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <li>
                                                            <a href="<?php echo e(route('subcategory-product',optional($category)->slug)); ?>">
                                                                <?php echo e(optional($category)->en_name); ?>

                                                            </a>
                                                        </li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </ul>
                                            <?php endif; ?>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li>
                                            <a href="<?php echo e(route('category-product',optional($category)->slug)); ?>">
                                                <?php echo e($category->bn_name); ?>

                                                <?php if(optional($category->subCategories)->count() > 0): ?>
                                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                                <?php endif; ?>
                                            </a>
                                            <?php if(optional($category->subCategories)->count() > 0): ?>
                                                <ul class="single-dropdown">
                                                    <?php $__currentLoopData = $category->subCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <li>
                                                            <a href="<?php echo e(route('subcategory-product',optional($category)->slug)); ?>">
                                                                <?php echo e(optional($category)->bn_name); ?>

                                                            </a>
                                                        </li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </ul>
                                            <?php endif; ?>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </ul>
                        <?php endif; ?>
                    </li>


                    <li class="<?php echo e(Route::is('diseases-subcategory') ? 'active' : ''); ?> dropdown">
                        <?php
                            $categories = \App\Models\DiseasesCategory::where('status',1)->get();
                        ?>
                        <a href="#"><?php echo e(__('public.plant_disease')); ?>

                            <?php if( $categories->count() > 0): ?><i class="fa fa-angle-down" aria-hidden="true"></i><?php endif; ?>
                        </a>
                        <?php if( $categories->count() > 0): ?>
                            <ul class="dropdown-menu">
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <a href="<?php echo e(route('diseases-subcategory',optional($category)->slug)); ?>">
                                        <?php if(Session::get('locale') == 'en'): ?>
                                            <?php echo e($category->en_name); ?>

                                        <?php else: ?>
                                            <?php echo e($category->bn_name); ?>

                                        <?php endif; ?>
                                    </a>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                        <?php endif; ?>
                    </li>

                    <li class="<?php echo e(Route::is('plant-disease') ? 'active' :''); ?>">
                        <a href="<?php echo e(route('carrier.create')); ?>"><?php echo e(__('public.carrer')); ?></a>
                    </li>
                    <li class="<?php echo e(Route::is('plant-disease') ? 'active' :''); ?>">
                        <a href="<?php echo e(route('comment.create')); ?>"><?php echo e(__('public.comment')); ?></a>
                    </li>
                </ul>

                <ul class="nav navbar-nav nav-two pull-right">
                    <li>
                        <div class="cart cart-wrapper inline-block">
                            <span class="cart-icon">
                                <a href="<?php echo e(route('admin.locale','en')); ?>" class="btn btn-dark btn-sm">EN</a>
                            </span>
                        </div>
                    </li>
                    <li>
                        <div class="cart cart-wrapper inline-block">
                            <span class="cart-icon">
                                <a href="<?php echo e(route('admin.locale','bn')); ?>" class="btn btn-dark btn-sm">BN</a>
                            </span>
                        </div>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div> <!-- container -->
    </nav>

    <div class="navbar-header inline-block visible-sm visible-xs">
        <a class="navbar-brand" style="height: 80px;" href="<?php echo e(route('home')); ?>">
            <img style="width: 65px;padding: 0 !important;" src="<?php echo e(asset('/')); ?>assets/frontend/images/logo_circle.png" alt="image">
        </a>
    </div>


</header> <!-- header-section -->

<?php /**PATH G:\Milon Kumar Tailwind Css\Laravel\The Camical Project\Agriculture\resources\views/frontend/includes/header.blade.php ENDPATH**/ ?>