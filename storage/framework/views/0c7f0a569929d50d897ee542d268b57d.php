<?php $__env->startSection('title', __('Create New Service')); ?><?php $__env->startSection('content'); ?>    <div class="clearfix my-3">        <h4 class="fw-semibold float-start"><?php echo e(__('Create New Service')); ?></h4>        <a href="<?php echo e(route('admin.service.index')); ?>" class="btn btn-info float-end">            <?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon','data' => ['name' => 'back','height' => '24']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'back','height' => '24']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $attributes = $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $component = $__componentOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?> <?php echo e(__('Back')); ?>        </a>    </div>    <div class="card border-0 mb-4">        <div class="card-body">            <form action="<?php echo e(route('admin.service.store')); ?>" method="post" enctype="multipart/form-data">                <?php echo csrf_field(); ?>                <div class="row mb-3">                    <?php $__currentLoopData = ['light_icon', 'dark_icon', 'cover', 'video_cover']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                        <div class="col-lg-3 col-md-3 col-12">                            <label class="form-label" for="<?php echo e($field); ?>"><?php echo e(__(ucfirst($field))); ?></label>                            <?php if (isset($component)) { $__componentOriginal9f066b104e9feebb8635e3779fc3f022 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9f066b104e9feebb8635e3779fc3f022 = $attributes; } ?>
<?php $component = App\View\Components\ImgUp::resolve(['name' => ''.e($field).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
<?php endif; ?>                        </div>                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                </div>                <div class="row mb-3">                    <div class="col-lg-6 col-md-6 col-12">                        <label class="form-label" for="name"><?php echo e(__('Service Name')); ?></label>                        <input class="form-control service-name" type="text" name="name" placeholder="Service Name" value="<?php echo e(old('name')); ?>" >                    </div>                    <div class="col-lg-6 col-md-6 col-12 mt-md-0 mt-3">                        <label class="form-label" for="price"><?php echo e(__('Price')); ?></label>                        <div class="input-group">                            <input type="text" class="form-control" name="price" oninput="this.value = validateDouble(this.value)" placeholder="Ex: 100, 200, etc..." value="<?php echo e(old('price')); ?>">                            <span class="input-group-text"><?php echo e(setting('site_currency')); ?></span>                        </div>                    </div>                </div>                <div class="row mb-3">                    <div class="col-lg-6 col-md-6 col-12 mt-md-0 mt-3">                        <label class="form-label" for="slug"><?php echo e(__('Slug')); ?></label>                        <input class="form-control service-slug" type="text" name="slug" placeholder="Ex: SEO Optimization, etc..." value="<?php echo e(old('slug')); ?>">                    </div>                    <div class="col-lg-6 col-md-6 col-12">                        <label class="form-label" for="video_link"><?php echo e(__('Video Link')); ?></label>                        <input class="form-control" type="url" name="video_link" placeholder="Ex: https://www.youtube.com/watch?v=xxxxxxxx" value="<?php echo e(old('video_link')); ?>">                    </div>                </div>                <div class="row mb-3">                    <div class="col-xl-12">                        <label class="form-label"><?php echo e(__('Description')); ?></label>                        <textarea class="summernote form-control" name="description"><?php echo e(old('description')); ?></textarea>                    </div>                </div>                <div class="row mb-3">                    <div class="col-xl-12">                        <label class="form-label"><?php echo e(__('Tags')); ?></label>                        <input class="form-control tags-evs" type="text" name="tags" placeholder="Ex: seo, google,tech,etc" value="<?php echo e(old('tags')); ?>">                    </div>                </div>                <?php echo $__env->make('backend.services.partials.side_content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>                <?php echo $__env->make('backend.services.partials.faq_content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>                <div class="row">                    <div class="col-md-2 mb-3 mt-2">                        <div class="card">                            <div class="form-check form-switch card-body p-2 rounded d-flex align-items-center">                                <label class="form-check-label mb-0 flex-grow-1" for="status"><?php echo e(__('Status')); ?></label>                                <input class="form-check-input coevs-switch flex-shrink-0 ms-2" type="checkbox" role="switch" name="status" value="1"  id="status">                            </div>                        </div>                    </div>                </div>                <div class="d-flex justify-content-end">                    <button class="btn btn-info mt-2 animate-up-2" type="submit">                        <?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
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
<?php endif; ?> <?php echo e(__('Create New Service')); ?>                    </button>                </div>            </form>        </div>    </div><?php $__env->stopSection(); ?><?php $__env->startPush('script'); ?>    <?php echo $__env->make('backend.services.partials._service_script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php $__env->stopPush(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/gratech/resources/views/backend/services/create.blade.php ENDPATH**/ ?>