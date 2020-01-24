<?php $__env->startSection('content'); ?>
    <div class="card card-default">
        <div class="card-header d-flex justify-content-between">
            <h5 class="card-title mb-0"><?php echo e(__('Collaborators')); ?></h5>
            <a href="<?php echo e(route('collaborators.create')); ?>" class="btn btn-success btn-sm">
                <i class="fas fa-plus"></i> <?php echo e(__('Create')); ?>

            </a>
        </div>
        <div class="table-responsive-lg">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th><?php echo e(__('Name')); ?></th>
                        <th><?php echo e(__('Email')); ?></th>
                        <th><?php echo e(__('City')); ?></th>
                        <th><?php echo e(__('Role')); ?></th>
                        <th><?php echo e(__('Status')); ?></th>
                        <th class="text-right"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php echo $__env->renderEach('collaborators.index.__row', $collaborators, 'collaborator', 'partials.__empty'); ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="mt-3 d-flex justify-content-center">
        <?php echo e($collaborators->links()); ?>

    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('modals'); ?>
    <?php echo $__env->make('partials.__confirm_delete_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(asset(mix('js/delete-modal.js'))); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\workshop-laravel\resources\views\collaborators\index.blade.php ENDPATH**/ ?>