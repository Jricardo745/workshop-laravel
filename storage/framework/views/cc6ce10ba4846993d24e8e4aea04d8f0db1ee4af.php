<?php $__env->startSection('content'); ?>
    <div class="card card-default">
        <div class="card-header pb-0">
            <h5 class="card-title"><?php echo e(__('Edit a collaborator')); ?></h5>
        </div>
        <div class="card-body">
            <form action="<?php echo e(route('collaborators.update', $collaborator)); ?>" method="post" id="collaborators-form">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PATCH'); ?>
                <?php echo $__env->make('collaborators.__form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </form>
        </div>
        <div class="card-footer d-flex justify-content-between">
            <a href="<?php echo e(route('collaborators.index')); ?>" class="btn btn-danger">
                <i class="fas fa-arrow-left"></i> <?php echo e(__('Cancel')); ?>

            </a>
            <button type="submit" class="btn btn-success" form="collaborators-form">
                <i class="fas fa-edit"></i> <?php echo e(__('Update')); ?>

            </button>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\workshop-laravel\resources\views\collaborators\edit.blade.php ENDPATH**/ ?>