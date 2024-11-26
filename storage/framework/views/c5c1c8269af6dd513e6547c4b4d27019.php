<div class="card mb-3 mt-4">    <div class="card-header p-2 d-flex justify-content-between align-items-center bg-light border-bottom bg-info text-white">        <h5 class="card-title mb-0 px-3"><?php echo e(__('FAQ Content')); ?></h5>    </div>    <div class="card-body p-3 ">                <div class="row mb-4">            <div class="col-12">                <label for="faqContentTitle" class="form-label"><?php echo e(__('Title')); ?></label>                <input type="text" id="faqContentTitle" name="faq_content[title]" class="form-control" placeholder="Ex: Opening Hours" value="<?php echo e(old('faq_content.title', $faqs['title'] ?? '')); ?>">            </div>        </div>                <div class="row mb-4">            <div class="col-12">                <label for="faqContentSummary" class="form-label"><?php echo e(__('Summery')); ?></label>                <textarea id="faqContentSummary" name="faq_content[summery]" class="form-control" rows="4" placeholder="Enter a brief summary"><?php echo e(old('faq_content.summery', $faqs['summery'] ?? '')); ?></textarea>            </div>        </div>                <div class="table-responsive rounded">            <table class="table table-sm table-bordered mb-0">                <thead class="table-info">                <tr>                    <th><?php echo e(__('Question')); ?></th>                    <th><?php echo e(__('Answer')); ?></th>                    <th class="text-center"><?php echo e(__('Action')); ?></th>                </tr>                </thead>                <tbody id="append-faq-content-<?php echo e($langCode ?? config('app.fallback_locale')); ?>">                    <?php if(isset($faqs['list']) && count($faqs['list']) > 0): ?>                        <?php $__currentLoopData = $faqs['list']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                            <tr class="align-middle">                                <td>                                    <input type="text" name="faq_content[list][<?php echo e($key); ?>][question]" class="form-control min-w-100" placeholder="<?php echo e(__('Enter Question')); ?>" value="<?php echo e(old('faq_content.list.'.$key.'.question', $content['question'] ?? '')); ?>">                                </td>                                <td>                                    <textarea name="faq_content[list][<?php echo e($key); ?>][answer]" class="form-control min-w-100" rows="4" placeholder="<?php echo e(__('Enter Answer')); ?>"><?php echo e(old('faq_content.list.'.$key.'.answer', $content['answer'] ?? '')); ?></textarea>                                </td>                                <td class="text-center">                                    <button type="button" class="btn btn-sm btn-danger delete-faq-field">                                        <?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
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
<?php endif; ?> <?php echo e(__('Delete')); ?>                                    </button>                                </td>                            </tr>                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                    <?php else: ?>                        <tr class="align-middle">                            <td>                                <input type="text" name="faq_content[list][0][question]" class="form-control min-w-100" placeholder="<?php echo e(__('Enter Question')); ?>">                            </td>                            <td>                                <textarea name="faq_content[list][0][answer]" class="form-control min-w-100" rows="4" placeholder="<?php echo e(__('Enter Answer')); ?>"></textarea>                            </td>                            <td class="text-center">                                <button type="button" class="btn btn-sm btn-danger delete-faq-field">                                    <?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
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
<?php endif; ?> <?php echo e(__('Delete')); ?>                                </button>                            </td>                        </tr>                    <?php endif; ?>                </tbody>            </table>        </div>                <div class="d-flex justify-content-start mt-3">            <button type="button"  class="add-new-faq-content btn btn-info d-flex align-items-center px-3">                <?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
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
<?php endif; ?> <?php echo e(__('Add New FAQ')); ?>            </button>        </div>    </div></div><?php /**PATH /Users/apple/Documents/gratech/resources/views/backend/services/partials/faq_content.blade.php ENDPATH**/ ?>