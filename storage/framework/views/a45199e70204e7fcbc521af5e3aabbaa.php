
<?php $__env->startSection('title'); ?>
	<?php echo e($title); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('page_content'); ?>
	<?php $__currentLoopData = $components; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<?php if ($__env->exists('frontend.page.component._'.$data->section)) echo $__env->make('frontend.page.component._'.$data->section, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.page.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/gratechcms/resources/views/frontend/page/show.blade.php ENDPATH**/ ?>