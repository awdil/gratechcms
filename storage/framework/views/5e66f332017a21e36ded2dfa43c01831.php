<div class="modal fade" id="new-category-modal" tabindex="-1" aria-labelledby="new-category-modal-label" aria-hidden="true">    <div class="modal-dialog">        <div class="modal-content">            <div class="modal-header">                <h5 class="modal-title" id="new-category-modal-label"><?php echo e(__('Add New Category')); ?></h5>                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>            </div>            <div class="modal-body">                <form action="<?php echo e(route('admin.support-ticket.category.store')); ?>" method="POST">                    <?php echo csrf_field(); ?>                    <div class="mb-3">                        <label for="name" class="form-label"><?php echo e(__('Name')); ?></label>                        <input type="text" class="form-control" id="name" name="name" value="<?php echo e(old('name')); ?>" placeholder="Enter category name" required>                    </div>                    <div class="mb-3">                        <label class="form-label"><?php echo e(__('Status')); ?></label>                        <div class="form-check form-switch">                            <input class="form-check-input coevs-switch" type="checkbox" name="status" value="1"}}>                        </div>                    </div>                    <div class="d-flex justify-content-end">                        <button type="submit" class="btn btn-info btn-sm"> <?php if (isset($component)) { $__componentOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5 = $attributes; } ?>
<?php $component = App\View\Components\Svg::resolve(['i' => 'check','height' => '24','class' => 'me-1'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
<?php endif; ?> <?php echo e(__('Create Now')); ?></button>                    </div>                </form>            </div>        </div>    </div></div><?php /**PATH /Users/apple/Documents/gratech/resources/views/backend/support_ticket/category/partial/_new_category_modal.blade.php ENDPATH**/ ?>