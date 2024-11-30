<?php $__env->startSection('title'); ?>
	<?php echo $__env->yieldContent('title'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
	
	<?php if(isset($isPageBreadcrumb) && $isPageBreadcrumb): ?>
		<?php echo $__env->make('frontend.page.partial._breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<?php endif; ?>
	
	<?php echo $__env->yieldContent('page_content'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/gratechcms/resources/views/frontend/page/index.blade.php ENDPATH**/ ?>