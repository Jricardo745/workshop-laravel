<?php $__env->startSection('content'); ?>
    <div class="card card-default">
        <div class="card-header d-flex justify-content-between">
            <h5 class="card-title mb-0"><?php echo e($collaborator->name); ?></h5>
            <div>
                <div class="btn-group btn-group-sm">
                    <a href="<?php echo e(route('collaborators.index')); ?>" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> <?php echo e(__('Back')); ?>

                    </a>

                    <a href="<?php echo e(route('collaborators.edit', $collaborator)); ?>" class="btn btn-secondary">
                        <i class="fas fa-edit"></i> <?php echo e(__('Edit')); ?>

                    </a>

                    <button type="button" class="btn btn-danger" data-route="<?php echo e(route('collaborators.destroy', $collaborator)); ?>" data-toggle="modal" data-target="#confirmDeleteModal">
                        <i class="fas fa-trash"></i> <?php echo e(__('Delete')); ?>

                    </button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <dl class="row">
                <dt class="col-md-3"><?php echo e(__('Name')); ?></dt>
                <dd class="col-md-3"><?php echo e($collaborator->name); ?></dd>

                <dt class="col-md-3"><?php echo e(__('Email')); ?></dt>
                <dd class="col-md-3"><?php echo e($collaborator->email); ?></dd>

                <dt class="col-md-3"><?php echo e(__('Role')); ?></dt>
                <dd class="col-md-3"><?php echo e($collaborator->role->name); ?></dd>

                <dt class="col-md-3"><?php echo e(__('City')); ?></dt>
                <dd class="col-md-3"><?php echo e($collaborator->city->name); ?></dd>
            </dl>

            <div class="card card-default">
                <div class="card-header"><?php echo e(__('Assigned tasks')); ?></div>
                <div class="card-body">
                    <?php echo $__env->renderWhen($collaborator->hasTasks(), 'collaborators.__task_list', ['tasks' => $collaborator->tasks], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('modals'); ?>
    <?php echo $__env->make('partials.__confirm_delete_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(asset(mix('js/delete-modal.js'))); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\workshop-laravel\resources\views\collaborators\show.blade.php ENDPATH**/ ?>