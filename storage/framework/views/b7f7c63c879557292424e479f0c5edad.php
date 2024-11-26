<?php $__currentLoopData = $plugins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pluginCode => $plugin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<?php if($plugin['status'] == \App\Constants\Status::TRUE): ?>
		<?php echo $__env->renderWhen($pluginCode == 'fb', 'frontend.partials.plugin._fb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>
		<?php echo $__env->renderWhen($pluginCode == 'tawk', 'frontend.partials.plugin._tawk', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>
		<?php echo $__env->renderWhen($pluginCode == 'google-analytics', 'frontend.partials.plugin._google_analytics', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>
	<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /Users/apple/Documents/gratech/resources/views/frontend/partials/plugin/_index.blade.php ENDPATH**/ ?>