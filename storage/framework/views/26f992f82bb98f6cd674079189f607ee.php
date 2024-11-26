<script src="<?php echo e(asset('general/js/jquery-3.7.1.min.js')); ?>"></script>
<script src="<?php echo e(asset('general/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/meanmenu.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/swiper-bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/jquery.counterup.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/wow.min.js')); ?>"></script>
<script  src="<?php echo e(asset('frontend/js/pace.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/magnific-popup.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/nice-select.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/isotope.pkgd.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/jquery.waypoints.js')); ?>"></script>
<?php echo $__env->make('frontend.partials._helper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script src="<?php echo e(asset('frontend/js/script.js?v2.01')); ?>"></script>
<script src="<?php echo e(asset('general/js/simple-notify.min.js?v2.01')); ?>"></script>
<script src="<?php echo e(asset('general/js/helpers.js?v2.01')); ?>"></script>
<?php echo $__env->yieldContent('script'); ?>
<?php echo $__env->yieldPushContent('script'); ?>

<?php ($script = \App\Models\SiteCustom::value('script')); ?>
<?php if($script->is_active): ?>
	<script>
		<?php echo e($script->value); ?>

	</script>
<?php endif; ?>
<?php echo $__env->make('frontend.partials.plugin._index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('general._notify_evs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /Users/apple/Documents/gratech/resources/views/frontend/layouts/partials/_script.blade.php ENDPATH**/ ?>