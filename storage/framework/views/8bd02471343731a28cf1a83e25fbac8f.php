<?php echo $__env->make('backend.settings.site.partials.fields._level', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<select class="form-select" aria-label="<?php echo e($field['key']); ?>" name="<?php echo e($field['key']); ?>" id="<?php echo e($field['key']); ?>">
    <?php $__currentLoopData = setting_select_options($field['key']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option <?php if(setting($field['key'],$field['value']) == $value): echo 'selected'; endif; ?> value="<?php echo e($value); ?>"><?php echo e(is_numeric($key) ? title($value) : $key); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>


<?php /**PATH /Users/apple/Documents/gratechcms/resources/views/backend/settings/site/partials/fields/select.blade.php ENDPATH**/ ?>