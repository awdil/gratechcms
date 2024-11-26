<?php echo $__env->make('backend.settings.site.partials.fields._level', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<input type="text" name="<?php echo e($field['key']); ?>" class="form-control" id="<?php echo e($field['key']); ?>"
       value="<?php echo e(setting($field['key'],$field['value'])); ?>" placeholder="<?php echo e(title($field['label'])); ?>">
<?php /**PATH /Users/apple/Documents/gratech/resources/views/backend/settings/site/partials/fields/text.blade.php ENDPATH**/ ?>