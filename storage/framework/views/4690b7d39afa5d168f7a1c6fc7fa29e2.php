
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['value']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['value']); ?>
<?php foreach (array_filter((['value']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="<?php echo e($value->class); ?> mb-3">
	<div class="form-group">
		<label for="<?php echo e($key); ?>"><?php echo e(ucwords(str_replace('_', ' ', $key.''))); ?></label>
		<?php if($value->type == 'text'): ?>
			<input id="<?php echo e($key); ?>" class="form-control" name="<?php echo e($key); ?>" value="<?php echo e($value->value); ?>" type="text" required>
		<?php elseif($value->type == 'textarea'): ?>
			<textarea id="<?php echo e($key); ?>" class="form-control" name="<?php echo e($key); ?>" type="text" required><?php echo e($value->value); ?></textarea>
		<?php else: ?>
			<?php if (isset($component)) { $__componentOriginal9f066b104e9feebb8635e3779fc3f022 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9f066b104e9feebb8635e3779fc3f022 = $attributes; } ?>
<?php $component = App\View\Components\ImgUp::resolve(['name' => ''.e($key).'','old' => $value->value,'ref' => 'coevs-remove-img'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
		<?php endif; ?>
	</div>
</div>
<?php /**PATH /Users/apple/Documents/gratech/resources/views/backend/page/component/partial/_input.blade.php ENDPATH**/ ?>