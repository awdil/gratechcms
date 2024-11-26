<?php echo $__env->make('backend.settings.site.partials.fields._level', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<input class="form-control form-control-color w-100" name="<?php echo e($field['key']); ?>"  id="<?php echo e($field['key']); ?>" type="color" value="<?php echo e(setting($field['key'],$field['value'])); ?>" >


<?php /**PATH /Users/apple/Documents/gratech/resources/views/backend/settings/site/partials/fields/color.blade.php ENDPATH**/ ?>