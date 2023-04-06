<footer class="footer-section">
    <div class="footer-container">
        <div class="container">
            <div class="row">
                <div class="text-center col-md-3 col-md-offset-0 col-sm-5 col-sm-offset-1">
                    <div class="footer-wrapper">
                        <h3><?php echo e(__('public.about_us')); ?></h3>
                        <div class="text-left">
                            <?php if(Session::get('locale') == 'en'): ?>
                                <p><?php echo Str::limit(get_setting('about_en_description'),300); ?></p>
                            <?php else: ?>
                                <p><?php echo Str::limit(get_setting('about_bn_description'),300); ?></p>
                            <?php endif; ?>
                        </div>
                    </div> <!-- footer-wrapper -->
                </div>

                <div class="text-center col-md-3 col-md-offset-0 col-sm-5 col-sm-offset-1">
                    <div class="footer-wrapper">
                        <h3><?php echo e(__('public.corporate_office')); ?></h3>
                        <div class="text-left">
                            <?php if(Session::get('locale') == 'en'): ?>
                                <p><?php echo e(__('public.location')); ?> : <?php echo e(get_setting('en_location')); ?></p>
                                <p><?php echo e(__('public.tel')); ?> : <a style="color: #808790;" href="tel:<?php echo e(get_setting('en_phone')); ?>"> <?php echo e(get_setting('en_phone')); ?></a></p>
                                <p><?php echo e(__("public.email")); ?> : <a style="color: #808790;" href="mailto:<?php echo e(get_setting('f_email')); ?>"><?php echo e(get_setting('f_email')); ?></a> </p>
                            <?php else: ?>
                                <p><?php echo e(__('public.location')); ?> : <?php echo e(get_setting('bn_location')); ?></p>
                                <p><?php echo e(__('public.tel')); ?> : <a style="color: #808790;" href="tel:<?php echo e(get_setting('en_phone')); ?>"> <?php echo e(get_setting('bn_phone')); ?></a></p>
                                <p><?php echo e(__("public.email")); ?> : <a style="color: #808790;" href="mailto:<?php echo e(get_setting('f_email')); ?>"><?php echo e(get_setting('f_email')); ?></a> </p>
                            <?php endif; ?>
                        </div>

                    </div> <!-- footer-wrapper -->
                </div>

                <div class="text-center col-md-3 col-md-offset-0 col-sm-5 col-sm-offset-1">
                    <div class="footer-wrapper">
                        <h3><?php echo e(__('public.quick_links')); ?></h3>

                        <ul class="wrapper-option">
                            <li><a href="<?php echo e(route('home')); ?>"><?php echo e(__('public.about_us')); ?></a></li>
                            <li><a href="<?php echo e(route('list-product')); ?>"><?php echo e(__('public.product_list')); ?></a></li>
                            <li><a href="<?php echo e(route('admin.locale','en')); ?>">EN</a></li>
                            <li><a href="<?php echo e(route('admin.locale','bn')); ?>">BN</a></li>
                        </ul> <!-- wrapper-option -->

                    </div> <!-- footer-wrapper -->
                </div>

                <div class="text-center col-md-3 col-md-offset-0 col-sm-5 col-sm-offset-1">
                    <div class="footer-wrapper">
                        <h3><?php echo e(__('public.latest_product')); ?></h3>
                        <ul class="wrapper-option">
                            <?php $__currentLoopData = \App\Models\Product::latest()->limit(6)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <a href="<?php echo e(route('product',optional($product)->slug)); ?>">
                                        <?php if(Session::get('locale') == 'en'): ?>
                                            <?php echo e(optional($product)->en_title); ?>

                                        <?php else: ?>
                                            <?php echo e(optional($product)->bn_title); ?>

                                        <?php endif; ?>
                                    </a>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul> <!-- wrapper-option -->
                    </div> <!-- footer-wrapper -->
                </div>
            </div>
        </div>
    </div> <!-- footer-container -->


    <div class="second-footer">
        

        <div class="copy-right text-center">
            <p>
                <?php if(Session::get('locale') == 'en'): ?>
                    <?php echo e(get_setting('en_copyright')); ?>

                <?php else: ?>
                    <?php echo e(get_setting('bn_copyright')); ?>

                <?php endif; ?>
            </p>
            <a href="https://jugol.ctpbd.com/" target="_blank" style="display: flex;
    right: 5px;
    justify-content: end;
    margin-top: -30px; color: #d0d0d0;padding-right: 10px;">Develop By </a>
        </div> <!-- copy-right -->
    </div> <!-- second-footer -->
</footer> <!-- footer-section -->

<?php /**PATH G:\Milon Kumar Tailwind Css\Laravel\The Camical Project\Agriculture\resources\views/frontend/includes/footer.blade.php ENDPATH**/ ?>