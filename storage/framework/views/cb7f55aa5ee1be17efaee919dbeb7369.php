<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" dir="<?php echo e(session('dir') ??  config('app.dir')); ?>" data-theme="<?php echo e(setting('site_appearance')); ?>">


<?php echo $__env->make('frontend.layouts.partials._head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>



<?php if(setting('site_preloader') == 'parallax'): ?>
	<div class="loading">
		<span class="text-capitalize">L</span>
		<span>o</span>
		<span>a</span>
		<span>d</span>
		<span>i</span>
		<span>n</span>
		<span>g</span>
	</div>
	<div id="preloader">
	</div>
<?php endif; ?>



<?php if(setting('header_visibility')): ?>
	<?php echo $__env->make('frontend.layouts.partials._header_'.setting('header_style'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>

<?php if(setting('cookie_status')): ?>
	<?php echo $__env->make('frontend.layouts.partials._cookies', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>



<?php echo $__env->make('frontend.layouts.partials._sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<main>
	<?php echo $__env->yieldContent('content'); ?>
</main>


<?php echo $__env->make('frontend.layouts.partials._footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<?php echo $__env->make('frontend.layouts.partials._script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


</body>
</html>
<?php /**PATH /Users/apple/Documents/gratechcms/resources/views/frontend/layouts/app.blade.php ENDPATH**/ ?>