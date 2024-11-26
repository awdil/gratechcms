<?php echo $__env->make('backend.settings.site.partials.fields._level', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="form-check form-switch">
    <input type="hidden" name="<?php echo e($field['key']); ?>" value="0">
    <input class="form-check-input coevs-switch" type="checkbox" role="switch" name="<?php echo e($field['key']); ?>" value="1" <?php if(setting($field['key'],$field['value'])): echo 'checked'; endif; ?>>
</div>
<?php /**PATH /Users/apple/Documents/gratech/resources/views/backend/settings/site/partials/fields/switch.blade.php ENDPATH**/ ?>