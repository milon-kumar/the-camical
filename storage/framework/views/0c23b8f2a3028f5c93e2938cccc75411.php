<?php $__env->startSection('title','About Us'); ?>
<?php $__env->startSection('style'); ?>
    <style>
        .titleStyle {
            font-weight: bold;
            font-size: 20px;
            padding: 0 30px;
        }
    </style>


    <div class="tooltip">Hover over me
        <span class="tooltiptext">Tooltip text</span>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="header-title" style="padding:30px 0 ; background:radial-gradient(green,forestgreen);">
        <div class="container">
            <h2 class="title"><?php echo e(__('public.product_list')); ?></h2>
        </div>
    </section> <!-- header-title -->

    <section class="team-section section-padding">
        <div class="container">
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="row toolbarSelector" >
                    <div class="col-md-4 mx-auto" style="box-shadow: 0 0 4px #a5a5a5; margin: 10px 20px;padding: 5px;">
                        <div class="" style="display: flex; align-items: center;justify-content: space-between;">
                            <div style="width: 65px;height: 65px; overflow: hidden;border: 1px solid #d0d0d0; border-radius: 50px;">
                                <img style="width:100%;height: 100%; object-fit: contain;" src="<?php echo e(asset(optional($product)->image)); ?>" alt="">
                            </div>
                            <div class="">
                                <?php if(Session::get('locale') == 'en'): ?>
                                    <p class="font-weight-bold titleStyle"><?php echo e(optional($product)->en_title); ?></p>
                                <?php else: ?>
                                    <p class="font-weight-bold titleStyle"><?php echo e(optional($product)->bn_title); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontend.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Milon Kumar Tailwind Css\Laravel\The Camical Project\Agriculture\resources\views/frontend/pages/product/product_list.blade.php ENDPATH**/ ?>