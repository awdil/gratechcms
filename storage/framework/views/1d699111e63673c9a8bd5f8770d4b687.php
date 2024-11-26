<?php $__env->startSection('title'); ?>    <?php echo e(__($settings['title'])); ?><?php $__env->stopSection(); ?><?php $__env->startSection('content'); ?>    <div class="py-4">        <div class="d-flex justify-content-between w-100 flex-wrap">            <div class="mb-3 mb-lg-0">                <h1 class="h4"><?php echo e(__($settings['title'])); ?></h1>            </div>        </div>    </div>    <div class="row">        <div class="col-12 col-xl-12">            <div class="card card-body border-0 shadow mb-4">                <form method="POST" action="<?php echo e(route('admin.settings.site.update', $section)); ?>" enctype="multipart/form-data">                    <?php echo method_field('PUT'); ?>                    <?php echo csrf_field(); ?>                    <div class="row">                        <?php $__currentLoopData = $settings['elements']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                            <div class="col-12 mb-3 <?php echo e($field['class']); ?>">                                <?php echo $__env->make('backend.settings.site.partials.fields.' . $field['type'], ['field' => $field], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>                            </div>                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                    </div>                    <div class="col-12">                        <button type="submit" class="btn btn-info mt-3">                            <?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon','data' => ['name' => 'check','height' => '20']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'check','height' => '20']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $attributes = $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $component = $__componentOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?> <?php echo e(__('Update Now')); ?>                        </button>                    </div>                </form>            </div>        </div>    </div><?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/gratech/resources/views/backend/page/setting.blade.php ENDPATH**/ ?>