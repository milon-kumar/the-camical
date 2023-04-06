<?php $__env->startSection('content'); ?>
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Footer Page Setting</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="basic-form">
                                <form action="<?php echo e(route('admin.setting.update')); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <input type="hidden" name="types[]" value="carrer_en_headding">
                                            <input type="text" class="form-control" placeholder="Carrer Header" name="carrer_en_headding" value="<?php echo e(get_setting('carrer_en_headding')); ?>">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <input type="hidden" name="types[]" value="carrer_bn_headding">
                                            <input type="text" class="form-control" placeholder="ক্যারিয়ার হেডার" name="carrer_bn_headding" value="<?php echo e(get_setting('carrer_bn_headding')); ?>">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <label for=""></label>
                                        </div>
                                        <div class="col-md-8">
                                            <button class="btn btn-dark">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Milon Kumar Tailwind Css\Laravel\The Camical Project\Agriculture\resources\views/backend/admin/pages/setting/carrer.blade.php ENDPATH**/ ?>