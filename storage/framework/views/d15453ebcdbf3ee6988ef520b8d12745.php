<div class="row">
	<?php $__currentLoopData = $sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="col-md-3 col-sm-6 col-12">
			<div class="card coevs-component mb-4">
				<div class="card-preview">
					<img src="<?php echo e(asset($section->preview)); ?>" class="card-img-top" alt="<?php echo e($section->name); ?>">
				</div>

				<div class="card-body">
					<span class="badge bg-info text-white"><a href="<?php echo e(route('admin.page.component.index', ['component_display' => $currentDisplay, 'component_category' => $section->category])); ?>"> <?php echo e(ucfirst($section->category)); ?> </a></span>
					<p class="card-text"><?php echo e($section->name); ?></p>
					<a class="btn btn-info" href="<?php echo e(route('admin.page.component.edit', ['component' => $section, 'component_display' => $currentDisplay, 'component_category' => $currentCategory])); ?>"><?php echo e(__('Manage')); ?></a>
					<?php if($section->type == \App\Constants\Component::DYNAMIC): ?>
						<span data-id="<?php echo e($section->id); ?>" class="delete btn btn-danger">
											<?php echo e(__('Delete')); ?>

									</span>
					<?php endif; ?>
				</div>
			</div>
		</div>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH /Users/apple/Documents/gratech/resources/views/backend/page/component/partial/_grid.blade.php ENDPATH**/ ?>