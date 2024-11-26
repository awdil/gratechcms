<div class="card mb-3 mt-4">    <div class="card-header p-2 d-flex justify-content-between align-items-center bg-info text-white">        <h5 class="card-title mb-0 px-3"><?php echo e(__('Side Content')); ?></h5>    </div>    <div class="card-body p-3">        <div class="row mb-3">            <div class="col-xl-12">                <label class="form-label"><?php echo e(__('Title')); ?></label>                <input class="form-control" type="text" name="side_content[title]" placeholder="Ex: Opening Hours" value="<?php echo e(old('side_content.title', $side_content['title'] ?? '')); ?>">            </div>        </div>        <div class="table-responsive rounded">            <table class="table table-sm table-bordered mb-0">                <thead class="table-info">                <tr>                    <th>                        <?php echo e(__('Icon')); ?>                        <a href="https://fontawesome.com/v5/search" target="_blank">                            <span class="badge bg-info"><?php echo e(__('Font Awesome 5 Icons')); ?></span>                        </a>                    </th>                    <th><?php echo e(__('Text')); ?></th>                    <th class="text-center"><?php echo e(__('Action')); ?></th>                </tr>                </thead>                <tbody id="append-side-content-<?php echo e($langCode ?? config('app.fallback_locale')); ?>">                <?php if(isset($side_content) && count($side_content) > 0): ?>                    <?php $__currentLoopData = $side_content['list']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                        <tr class="align-middle">                            <td>                                <input type="text" class="form-control min-w-100" placeholder="<?php echo e(__('Enter Icon')); ?>" name="side_content[list][<?php echo e($key); ?>][icon]" value="<?php echo e(old('side_content.icon.'.$key, $content['icon'] ?? '')); ?>">                            </td>                            <td>                                <input type="text" class="form-control min-w-100" placeholder="<?php echo e(__('Enter Text')); ?>" name="side_content[list][<?php echo e($key); ?>][text]" value="<?php echo e(old('side_content.text.'.$key, $content['text'] ?? '')); ?>">                            </td>                            <td class="text-center"><button class="btn btn-danger text-white delete-field" type="button"><?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon','data' => ['name' => 'trash','height' => '20']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'trash','height' => '20']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $attributes = $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $component = $__componentOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?><?php echo e(__('Delete')); ?></button></td>                        </tr>                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                <?php else: ?>                    <tr class="align-middle">                        <td>                            <input type="text" class="form-control min-w-100" placeholder="<?php echo e(__('Enter Icon')); ?>" name="side_content[list][0][icon]">                        </td>                        <td>                            <input type="text" class="form-control min-w-100" placeholder="<?php echo e(__('Enter Text')); ?>" name="side_content[list][0][text]">                        </td>                        <td class="text-center"><button class="btn btn-danger text-white delete-field" type="button"><?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon','data' => ['name' => 'trash','height' => '20']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'trash','height' => '20']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $attributes = $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $component = $__componentOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?><?php echo e(__('Delete')); ?></button></td>                    </tr>                <?php endif; ?>                </tbody>            </table>                        <div class="d-flex justify-content-start mt-3">                <a href="javascript:void(0)"  class="add-new-side-content btn btn-info d-flex align-items-center px-3">                    <?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon','data' => ['name' => 'add','height' => '20','class' => 'me-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'add','height' => '20','class' => 'me-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $attributes = $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $component = $__componentOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?> <?php echo e(__('Add New Side Content')); ?>                </a>            </div>        </div>    </div></div><?php /**PATH /Users/apple/Documents/gratech/resources/views/backend/services/partials/side_content.blade.php ENDPATH**/ ?>