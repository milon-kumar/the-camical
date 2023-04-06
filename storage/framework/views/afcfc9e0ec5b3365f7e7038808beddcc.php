<section class="">
    <div class="container">
        <div class="row" style="padding: 10px 0 35px 0;">
            <div class="col-md-12 text-center">
                <h1 class="text-success"><?php echo e(__('public.popular_product')); ?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="worker-carousel owl-carousel owl-theme">
                    <?php $__currentLoopData = $popular_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo $__env->make('frontend.components.single_product', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH G:\Milon Kumar Tailwind Css\Laravel\The Camical Project\Agriculture\resources\views/frontend/components/popular_product.blade.php ENDPATH**/ ?>