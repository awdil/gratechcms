
<?php $__env->startSection('title'); ?>
	<?php echo e(__('Home')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
	<?php $__currentLoopData = $components; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<?php if ($__env->exists('frontend.page.component._'.$data->section)) echo $__env->make('frontend.page.component._'.$data->section, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/gratechcms/resources/views/frontend/index.blade.php ENDPATH**/ ?>