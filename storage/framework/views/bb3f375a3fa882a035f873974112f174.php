<?php $__env->startSection('title','About Us'); ?>
<?php $__env->startSection('content'); ?>
    <section class="header-title" style="background: forestgreen;padding: 20px 0;">
        <div class="container">
            <h2 class="title"><?php echo e(__('public.carrer')); ?></h2>
            <span class="sub-title">Home / <span class="text-color"><?php echo e(__('public.carrer')); ?></span></span>
        </div>
    </section> <!-- header-title -->

    <section class="team-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card rounded-0" style="box-shadow: 0 0 5px 2px #e3e3e3;border: 1px solid #e3e3e3;padding: 15px;">
                        <div class="card-body">
                            <p>
                                <?php if(Session::get('locale') == 'en'): ?>
                                    <?php echo e(get_setting('carrer_en_headding')); ?>

                                <?php else: ?>
                                    <?php echo e(get_setting('carrer_bn_headding')); ?>

                                <?php endif; ?>
                            </p>
                            <hr class="border border-bottom" style="border-color: #e3e3e3;margin-bottom: 10px;"/>
                            <div class="">
                                <form action="<?php echo e(route('carrier.store')); ?>" method="post" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group">
                                        <label for="exampleInputPhoen"><?php echo e(__('public.phone_number')); ?> <span class="text-danger">*</span> </label>
                                        <input type="text" name="phone" class="form-control" id="exampleInputPhoen" placeholder="">
                                        <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <small class="text-danger"><?php echo e($message); ?></small>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1"><?php echo e(__('public.email')); ?></label>
                                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email(Optional)">
                                    </div>

                                    <div class="form-group">
                                        <label for=""><?php echo e(__('public.cv_drop')); ?> <span class="text-danger">*</span></label>
                                        <input type="file" name="image" class="form-control" id="exampleInputCv" placeholder="Enter email(Optional)">

                                        <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <small class="text-danger"><?php echo e($message); ?></small>
                                        <?php else: ?>
                                            <small><?php echo e(__('public.cv_drop_message')); ?></small>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputMessage"><?php echo e(__('public.cv_message')); ?></label>
                                        <textarea class="form-control" name="message" id="exampleInputMessage" rows="4"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- team-section -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Milon Kumar Tailwind Css\Laravel\The Camical Project\Agriculture\resources\views/frontend/pages/carrer/create.blade.php ENDPATH**/ ?>