<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="name"><?php echo e(__('Name')); ?></label>
            <input type="text" class="form-control <?php echo e($errors->has('name') ? 'is-invalid' : ''); ?>" name="name" id="name" value="<?php echo e(old('name', $collaborator->name)); ?>" required>
            <?php echo $__env->renderWhen($errors->has('name'), 'partials.__invalid_feedback', ['feedback' => $errors->first('name')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="email"><?php echo e(__('Email')); ?></label>
            <input type="email" class="form-control <?php echo e($errors->has('email') ? 'is-invalid' : ''); ?>" name="email" id="email" value="<?php echo e(old('email', $collaborator->email)); ?>" required>
            <?php echo $__env->renderWhen($errors->has('email'), 'partials.__invalid_feedback', ['feedback' => $errors->first('email')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="city"><?php echo e(__('City')); ?></label>
            <select class="form-control custom-select <?php echo e($errors->has('city') ? 'is-invalid' : ''); ?>" name="city" id="city" required>
                <option value=""><?php echo e(__('Please select a city')); ?></option>
                <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($city->id); ?>" <?php echo e(old('city', $collaborator->city_id) == $city->id ? 'selected' : ''); ?>><?php echo e($city->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <?php echo $__env->renderWhen($errors->has('city'), 'partials.__invalid_feedback', ['feedback' => $errors->first('city')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="role"><?php echo e(__('Role')); ?></label>
            <select class="form-control custom-select <?php echo e($errors->has('role') ? 'is-invalid' : ''); ?>" name="role" id="role" required>
                <option value=""><?php echo e(__('Please select a role')); ?></option>
                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($role->id); ?>" <?php echo e(old('role', $collaborator->role_id) == $role->id ? 'selected' : ''); ?>><?php echo e($role->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <?php echo $__env->renderWhen($errors->has('role'), 'partials.__invalid_feedback', ['feedback' => $errors->first('role')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\workshop-laravel\resources\views\collaborators\__form.blade.php ENDPATH**/ ?>