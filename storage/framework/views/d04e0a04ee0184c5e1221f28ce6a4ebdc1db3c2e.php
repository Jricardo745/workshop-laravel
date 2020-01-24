<div class="modal fade" tabindex="-1" role="dialog" id="confirmDeleteModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?php echo e(__('Are you sure?')); ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p><?php echo e(__('This action cannot be undone!')); ?></p>
                <form id="deleteForm" action="" method="post">
                    <?php echo method_field('DELETE'); ?>
                    <?php echo csrf_field(); ?>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__('Close')); ?></button>
                <button type="submit" form="deleteForm" class="btn btn-danger"><?php echo e(__('Delete')); ?></button>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\workshop-laravel\resources\views\partials\__confirm_delete_modal.blade.php ENDPATH**/ ?>