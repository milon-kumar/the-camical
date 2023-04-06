<div id="offcanvas-menu" class="visible-xs visible-sm">

    <span class="close-menu"><i class="fa fa-times" aria-hidden="true"></i></span>

    <ul class="menu-wrapper">
        <li>
            <a class="<?php echo e(Route::is('home') ? 'active' :''); ?>" href="<?php echo e(route('home')); ?>"><?php echo e(__('public.about_us')); ?></a>
        </li>

        <li>
            <a class="<?php echo e(Route::is('list-product') ? 'active' :''); ?>" href="<?php echo e(route('list-product')); ?>"><?php echo e(__('public.product_list')); ?></a>
        </li>

        <li>
            <?php
                $categories = \App\Models\Category::where('status',1)->get();
            ?>
            <a class="<?php echo e(Route::is('category-product') || Route::is('subcategory-product') ? 'active' : ''); ?> dropmenu" href="#"> <?php echo e(__('public.product_service')); ?>

                <?php if($categories->count() > 0): ?>
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                <?php endif; ?>
            </a>
            <?php if($categories->count() > 0): ?>
                <ul class="dropDown sub-menu">
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <a class="<?php echo e(Route::is('category-product') || Route::is('subcategory-product') ? 'active' : ''); ?> single-dropmenu" href="<?php echo e(route('category-product',optional($category)->slug)); ?>">
                                <?php if(Session::get('locale') == 'en'): ?>
                                    <?php echo e(optional($category)->en_name); ?>

                                <?php else: ?>
                                    <?php echo e(optional($category)->bn_name); ?>

                                <?php endif; ?>
                                <?php if($category->subCategories->count() > 0): ?>
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                <?php endif; ?>
                            </a>
                            <?php if($category->subCategories->count() > 0): ?>
                                <ul class="single-dropDown sub-menu">
                                    <?php $__currentLoopData = $category->subCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li>
                                            <a class="<?php echo e(Route::is('category-product') || Route::is('subcategory-product') ? 'active' : ''); ?>" href="<?php echo e(route('subcategory-product',optional($category)->slug)); ?>">
                                                <?php if(Session::get('locale') == 'en'): ?>
                                                    <?php echo e(optional($category)->en_name); ?>

                                                <?php else: ?>
                                                    <?php echo e(optional($category)->bn_name); ?>

                                                <?php endif; ?>
                                            </a>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul><!-- end of dropdown -->
            <?php endif; ?>
        </li><!-- end of li -->

        <li>
            <?php
                $categories = \App\Models\DiseasesCategory::where('status',1)->get();
            ?>

            <a class="<?php echo e(Route::is('diseases-subcategory') ? 'active' : ''); ?> dropmenu" href="#"> <?php echo e(__('public.plant_disease')); ?>

                <?php if($categories->count() > 0): ?>
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                <?php endif; ?>
            </a>
            <?php if($categories->count() > 0): ?>
                <ul class="dropDown sub-menu">
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <a class="single-dropmenu" href="#">
                                <?php if(Session::get('locale') == 'en'): ?>
                                    <?php echo e(optional($category)->en_name); ?>

                                <?php else: ?>
                                    <?php echo e(optional($category)->bn_name); ?>

                                <?php endif; ?>
                            </a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul><!-- end of dropdown -->
            <?php endif; ?>
        </li><!-- end of li -->
        <li>
            <a class="" href="<?php echo e(route('admin.locale','en')); ?>">EN</a>
        </li>
        <li>
            <a class="" href="<?php echo e(route('admin.locale','bn')); ?>">BN</a>
        </li>

    </ul> <!-- menu-wrapper -->
</div>
<!-- Off-Canvas View Only -->
<?php /**PATH G:\Milon Kumar Tailwind Css\Laravel\The Camical Project\Agriculture\resources\views/frontend/components/overlay_canvas_menu.blade.php ENDPATH**/ ?>