<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" dir="<?php echo e(session('dir') ??  config('app.dir')); ?>">


<?php echo $__env->make('backend.layouts.partials._head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body >

<?php if( !$errors->isEmpty() && $errors->any()): ?>
	<?php
		notifyEvs('error', $errors->first());
		session()->flash('errors', $errors);
        session()->save();
	?>
<?php endif; ?>


<?php echo $__env->make('backend.layouts.partials._navbar_small_screen', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<?php echo $__env->make('backend.layouts.partials._sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main class="content ">
	
	<?php echo $__env->make('backend.layouts.partials._navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	
	<div class=" main-content">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    
    <?php echo $__env->make('backend.partials._delete_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</main>

<?php echo $__env->make('backend.layouts.partials._script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>
</html>
<?php /**PATH /Users/apple/Documents/gratech/resources/views/backend/layouts/app.blade.php ENDPATH**/ ?>