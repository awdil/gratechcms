<div class="row g-3">    <?php $__currentLoopData = $cardStatistics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $statistic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>        <div class="col-6 col-md-4 col-lg-3">            <div class="card card-sm h-100">                <div class="card-body p-2 position-relative">                    <?php if(isset($statistic['link'])): ?>                        <a href="<?php echo e($statistic['link']); ?>"                           class="position-absolute top-0 end-0 d-flex align-items-center fw-bold text-muted mt-2 me-2">                            <i class="fa-regular fa-arrow-up-right-from-square text-<?php echo e($statistic['color']); ?>"></i>                        </a>                    <?php endif; ?>                    <div class="row align-items-center">                        <div class="col-auto">                            <div class="icon-shape icon-shape-<?php echo e($statistic['color']); ?> rounded me-2">                                <?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon','data' => ['name' => $statistic['icon'],'class' => 'icon']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($statistic['icon']),'class' => 'icon']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $attributes = $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $component = $__componentOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?>                            </div>                        </div>                        <div class="col">                            <div class="fw-medium">                                <?php echo e($statistic['title']); ?>                            </div>                            <div class="text-muted text-nowrap">                                <?php echo e($statistic['value']); ?>                            </div>                        </div>                    </div>                </div>            </div>        </div>    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></div><?php /**PATH /Users/apple/Documents/gratech/resources/views/backend/dashboard/partial/_statistics.blade.php ENDPATH**/ ?>