<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">


<?php echo $__env->make('backend.layouts.partials._head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>


<?php echo $__env->yieldContent('content'); ?>


<?php echo $__env->make('backend.layouts.partials._script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>
</html><?php /**PATH /Users/apple/Documents/gratechcms/resources/views/backend/layouts/auth.blade.php ENDPATH**/ ?>