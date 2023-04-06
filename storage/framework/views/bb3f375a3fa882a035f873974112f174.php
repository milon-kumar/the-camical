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
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, amet consectetur debitis dolores doloribus ducimus est facere inventore nam necessitatibus odio odit optio porro sapiente similique sint soluta, tempora voluptas.</p>
                            <hr class="border border-bottom" style="border-color: #e3e3e3;margin-bottom: 10px;"/>
                            <div class="">
                                <form>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"><?php echo e(__('public.email')); ?></label>
                                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email(Optional)">
                                    </div>
                                    <div class="form-group">
                                        <label for=""><?php echo e(__('public.cv_drop')); ?></label>
                                        <input type="file" name="cv" class="form-control" id="exampleInputCv" placeholder="Enter email(Optional)">
                                        <small><?php echo e(__('public.cv_drop_message')); ?></small>
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