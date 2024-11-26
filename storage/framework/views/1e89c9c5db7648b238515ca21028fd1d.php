<?php $__env->startSection('title'); ?>    <?php echo e(__('Support Category')); ?><?php $__env->stopSection(); ?><?php $__env->startSection('content'); ?>    <div class="py-4">        <div class="d-flex justify-content-between w-100 flex-wrap">            <div class="mb-3 mb-lg-0">                <h1 class="h4"><?php echo e(__('Support Category')); ?></h1>            </div>            <div class="btn-toolbar  mb-md-0 mb-2">                <button type="button" class="btn btn-sm btn-info d-inline-flex align-items-center"                        data-bs-toggle="modal" data-bs-target="#new-category-modal">                    <?php if (isset($component)) { $__componentOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5 = $attributes; } ?>
<?php $component = App\View\Components\Svg::resolve(['i' => 'add','class' => 'me-1','height' => '24'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
<?php endif; ?>                    <?php echo e(__('Add New')); ?>                </button>            </div>        </div>    </div>    <div class="card border-0 shadow mb-4">        <div class="table-responsive rounded">            <table class="table table-striped table-hover table-bordered align-middle">                <thead class="table-light">                <tr>                    <th scope="col"><?php echo e(__('Name')); ?></th>                    <th scope="col"><?php echo e(__('Status')); ?></th>                    <th scope="col"><?php echo e(__('Created At')); ?></th>                    <th scope="col"><?php echo e(__('Action')); ?></th>                </tr>                </thead>                <tbody>                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                    <tr>                        <td><span class="fw-bold"><?php echo e($category->name); ?></span></td>                        <td>                            <span class="badge bg-<?php echo e($category->status ? 'success' : 'danger'); ?>"><?php echo e(strtoupper($category->status ? 'ACTIVE' : 'INACTIVE')); ?></span>                        </td>                        <td>                            <span class="fw-bold"> <?php echo e($category->created_at->diffForHumans()); ?></span>                        </td>                        <td>                            <div class="btn-group" role="group" aria-label="Actions">                                <a href="javascript:void(0)" class="btn btn-sm btn-info edit-modal"                                   data-edit-url="<?php echo e(route('admin.support-ticket.category.edit', $category->id)); ?>">                                    <?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon','data' => ['name' => 'edit','height' => '20']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'edit','height' => '20']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $attributes = $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $component = $__componentOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?> <?php echo e(__('Edit')); ?>                                </a>                                <a href="javascript:void(0)" class="btn btn-sm btn-danger delete"                                   data-url="<?php echo e(route('admin.support-ticket.category.destroy', $category->id)); ?>">                                    <?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon','data' => ['name' => 'delete-3','height' => '20']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'delete-3','height' => '20']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $attributes = $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $component = $__componentOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?> <?php echo e(__('Delete')); ?>                                </a>                            </div>                        </td>                    </tr>                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                </tbody>            </table>        <?php if($categories->count() == 0): ?>                <h4 class="text-center text-muted py-3"><?php echo e(__('No Data Available')); ?></h4>            <?php endif; ?>        </div>    </div>        <?php echo $__env->make('backend.support_ticket.category.partial._new_category_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>        <?php echo $__env->make('backend.support_ticket.category.partial._edit_category_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php $__env->stopSection(); ?><?php $__env->startSection('script'); ?>    <script>        $(document).ready(function () {            editFormByModal('edit-category-modal', 'edit-category-data');        });    </script><?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/gratech/resources/views/backend/support_ticket/category/index.blade.php ENDPATH**/ ?>