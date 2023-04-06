<?php $__env->startSection('content'); ?>
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">All Slider</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title d-inline-block">All Slider - (<?php echo e($sliders->count()); ?>)</h4>
                            <a href="<?php echo e(route('admin.slider.create')); ?>" class="btn btn-primary btn-sm float-right">Add Slider</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>#SL</th>
                                        <th>English Title</th>
                                        <th>Bangla Title</th>
                                        
                                        <th>Slider Serial</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td>#<?php echo e($loop->iteration); ?></td>
                                                <td><img style="width: 35px;height: 35px;" src="<?php echo e(asset(optional($slider)->image)); ?>" class=" rounded-circle mr-3" alt=""><?php echo e(optional($slider)->en_title); ?></td>
                                                <td><?php echo e(optional($slider)->bn_title); ?></td>
                                                
                                                <td><?php echo e(optional($slider)->order); ?></td>
                                                <td>
                                                    <?php if(optional($slider)->status == 1): ?>
                                                        <span class="badge badge-success text-white badge-pill">Published</span>
                                                    <?php else: ?>
                                                        <span class="badge badge-danger text-white badge-pill">Unpublished</span>
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <a href="<?php echo e(route('admin.slider.edit',$slider->id)); ?>" class="btn btn-success btn-sm text-white">Edit</a>
                                                    <a href="javascript:void(0);" class="btn btn-danger btn-sm text-white" onclick="deleteType(<?php echo e($slider->id); ?>)">Delete</a>
                                                    <form id="deleteForm<?php echo e($slider->id); ?>" action="<?php echo e(route('admin.slider.destroy',$slider->id)); ?>" method="post">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('DELETE'); ?>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>#SL</th>
                                        <th>Title</th>
                                        <th>Short Description</th>
                                        <th>Button Name</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #/ container -->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Milon Kumar Tailwind Css\Laravel\The Camical Project\Agriculture\resources\views/backend/admin/pages/slider/index.blade.php ENDPATH**/ ?>