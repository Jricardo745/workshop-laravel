<tr>
    <td><?php echo e($collaborator->name); ?></td>
    <td><?php echo e($collaborator->email); ?></td>
    <td><?php echo e($collaborator->city->name); ?></td>
    <td><?php echo e($collaborator->role->name); ?></td>
    <td><?php echo e($collaborator->isEnabled() ? __('Enabled') : __('Disabled')); ?></td>
    <td class="text-right">
        <div class="btn-group btn-group-sm" role="group" aria-label="<?php echo e(__('Collaborator actions')); ?>">
            <a href="<?php echo e(route('collaborators.show', $collaborator)); ?>" class="btn btn-link" title="<?php echo e(__('View')); ?>">
                <i class="fas fa-eye"></i>
            </a>
            <a href="<?php echo e(route('collaborators.edit', $collaborator)); ?>" class="btn btn-link" title="<?php echo e(__('Edit')); ?>">
                <i class="fas fa-edit"></i>
            </a>
            <button type="button" class="btn btn-link text-danger" data-route="<?php echo e(route('collaborators.destroy', $collaborator)); ?>" data-toggle="modal" data-target="#confirmDeleteModal" title="<?php echo e(__('Delete')); ?>">
                <i class="fas fa-trash"></i>
            </button>
        </div>
    </td>
</tr>
<?php /**PATH C:\laragon\www\workshop-laravel\resources\views\collaborators\index\__row.blade.php ENDPATH**/ ?>