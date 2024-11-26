<form method="POST" action="<?php echo e(route('admin.page.component-item.store')); ?>" enctype="multipart/form-data">
	<?php echo csrf_field(); ?>
	<input type="hidden" name="component_id" value="<?php echo e($componentId); ?>">
	<input type="hidden" name="fields" value="<?php echo e(json_encode($fields)); ?>">
	<div class="row">
		<?php $__currentLoopData = $fields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="<?php echo e($value->class); ?> mb-3">
				<div class="form-group">
					<label for="<?php echo e($key); ?>"><?php echo e(ucwords(str_replace('_', ' ', $key.''))); ?></label>
					<?php switch($value->type):
						case ('img'): ?>
							<?php if (isset($component)) { $__componentOriginal9f066b104e9feebb8635e3779fc3f022 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9f066b104e9feebb8635e3779fc3f022 = $attributes; } ?>
<?php $component = App\View\Components\ImgUp::resolve(['name' => ''.e($key).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('img-up'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ImgUp::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9f066b104e9feebb8635e3779fc3f022)): ?>
<?php $attributes = $__attributesOriginal9f066b104e9feebb8635e3779fc3f022; ?>
<?php unset($__attributesOriginal9f066b104e9feebb8635e3779fc3f022); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9f066b104e9feebb8635e3779fc3f022)): ?>
<?php $component = $__componentOriginal9f066b104e9feebb8635e3779fc3f022; ?>
<?php unset($__componentOriginal9f066b104e9feebb8635e3779fc3f022); ?>
<?php endif; ?>
							<?php break; ?>
						<?php case ('textarea'): ?>
							<textarea id="<?php echo e($key); ?>" class="form-control" name="<?php echo e($key); ?>" rows="3"></textarea>
							<?php break; ?>
						<?php case ('rich_text'): ?>
							<textarea id="<?php echo e($key); ?>" class="form-control summernote" name="<?php echo e($key); ?>" rows="3"></textarea>
							<?php break; ?>
						<?php case ('date'): ?>
							<input id="<?php echo e($key); ?>" class="form-control datepicker-input" name="<?php echo e($key); ?>" type="date" required>
							<?php break; ?>
						<?php default: ?>
							<input id="<?php echo e($key); ?>" class="form-control" name="<?php echo e($key); ?>" type="text" required>
					<?php endswitch; ?>
				</div>
			</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	
	</div>
	
	<div class="mt-3">
		<button class="btn btn-gray-800 mt-2 animate-up-2" type="submit"><?php echo e(__('Save Now')); ?></button>
	</div>
</form><?php /**PATH /Users/apple/Documents/gratech/resources/views/backend/page/component/partial/_new_form_data.blade.php ENDPATH**/ ?>