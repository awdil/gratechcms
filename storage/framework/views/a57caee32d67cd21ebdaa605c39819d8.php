<div class="avatar-upload">
    <div class="avatar-edit">
        <input type='file' class="imageUpload" name="<?php echo e($name); ?>" id="<?php echo e($name.$ref); ?>_upload" data-preview-id="<?php echo e($name.$ref); ?>" accept=".png, .jpg, .jpeg" />
        <label for="<?php echo e($name.$ref); ?>_upload" class="imageUpload">
            <?php if (isset($component)) { $__componentOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5 = $attributes; } ?>
<?php $component = App\View\Components\Svg::resolve(['i' => 'upload'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5)): ?>
<?php $attributes = $__attributesOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5; ?>
<?php unset($__attributesOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5)): ?>
<?php $component = $__componentOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5; ?>
<?php unset($__componentOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5); ?>
<?php endif; ?>
        </label>
        <?php if($ref === 'coevs-remove-img'): ?>
        <input type='hidden' class="imageUpload"  id="<?php echo e($name.$ref); ?>-remove" data-preview-id="<?php echo e($name.$ref); ?>" />
        <label for="<?php echo e($name.$ref); ?>-remove" class="imageRemove">
            <?php if (isset($component)) { $__componentOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5 = $attributes; } ?>
<?php $component = App\View\Components\Svg::resolve(['i' => 'close2'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5)): ?>
<?php $attributes = $__attributesOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5; ?>
<?php unset($__attributesOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5)): ?>
<?php $component = $__componentOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5; ?>
<?php unset($__componentOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5); ?>
<?php endif; ?>
        </label>
        <?php endif; ?>
    </div>
    <div class="avatar-preview">
        <div id="<?php echo e($name.$ref); ?>" style="background-image: url('<?php echo e(asset($old ?? 'general/static/placeholder.png')); ?>');"></div>
    </div>
</div>

<?php /**PATH /Users/apple/Documents/gratechcms/resources/views/components/img-up.blade.php ENDPATH**/ ?>