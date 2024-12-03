<?php $__env->startSection('setting_title', __('Site Settings')); ?>
<?php $__env->startPush('style'); ?>
    <style>
        @media (max-width: 1300px) {
            .col-lg-3,
            .col-lg-9 {
                flex: 0 0 100%;
                max-width: 100%;
            }
        }
    </style>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('setting_content'); ?>
    <?php ($activeSection = session('section') ?? 'general_settings'); ?>
    <div class="row g-2">
        
        <div class="col-12 col-lg-3 col-md-6 pe-lg-2 mb-3 mb-lg-0 d-flex flex-column">
            <div class="card side-nav-card h-100">
                <div class="nav-card-header">
                    <?php echo e(__('Settings Menu')); ?>

                </div>
                <div class="card-body p-0">
                    <ul class="nav flex-column side-nav-list mb-2">
                        <?php $__currentLoopData = $settingMenus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name => $icon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center <?php echo e($activeSection === $name ? 'active' : ''); ?> "
                                   id="v-pills-<?php echo e($name); ?>-tab"
                                   data-bs-toggle="pill" href="#v-pills-<?php echo e($name); ?>" role="tab"
                                   aria-controls="v-pills-<?php echo e($name); ?>"
                                   aria-selected="<?php echo e($activeSection === $name ? 'true' : 'false'); ?>">
                                    <?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon','data' => ['name' => ''.e($icon).'','height' => '20','width' => '20','class' => 'me-2 ']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => ''.e($icon).'','height' => '20','width' => '20','class' => 'me-2 ']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $attributes = $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $component = $__componentOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?>
                                    <span class="me-4"><?php echo e(title($name)); ?></span>
                                    <span class="ms-auto">
                                    <?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon','data' => ['name' => 'arrow-right-3','height' => '20','width' => '20']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'arrow-right-3','height' => '20','width' => '20']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $attributes = $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $component = $__componentOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?>
                                </span>
                                </a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
        </div>

        
        <div class="col-12 col-lg-9 col-md-12 ps-lg-2">
            <div class="tab-content" id="v-pills-tabContent">
                <?php $__currentLoopData = $settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section => $fields): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="tab-pane fade <?php echo e($activeSection === $section ? 'show active' : ''); ?>"
                         id="v-pills-<?php echo e($section); ?>" role="tabpanel" aria-labelledby="v-pills-<?php echo e($section); ?>-tab">
                        <div class="card">
                            <div class="nav-card-header bg-light-+
                            "><?php echo e(__($fields['title'])); ?></div>
                            <div class="card-body">
                                <form method="POST" action="<?php echo e(route('admin.settings.site.update', $section)); ?>" enctype="multipart/form-data">
                                    <?php echo method_field('PUT'); ?>
                                    <?php echo csrf_field(); ?>
                                    <div class="row gy-3">
                                        <?php $__currentLoopData = $fields['elements']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="<?php echo e($field['class']); ?> mb-3">
                                                <?php echo $__env->make('backend.settings.site.partials.fields.' . $field['type'], ['field' => $field], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                    <div class="col-12 text-end">
                                        <button type="submit" class="btn btn-info mt-3">
                                            <?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
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
<?php endif; ?> <?php echo e(__('Update Settings')); ?>

                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('script'); ?>
    <script>
        $(document).ready(function () {
            'use strict';
            // Cache jQuery selectors
            const $siteCurrencyType = $('#site_currency_type');
            const $siteCurrency = $('#site_currency');
            const $currencySymbol = $('#currency_symbol');

            // Initial currencies data
            let currencies = <?php echo json_encode(getJsonData('currencies'), 15, 512) ?>;

            // Handle currency type change
            $siteCurrencyType.on('change', function () {

                let currencyType = $(this).val();
                let selectedCurrencies = currencies[currencyType];

                // Clear and populate currency options
                $siteCurrency.empty();
                $.each(selectedCurrencies, function (key, currency) {
                    $siteCurrency.append(
                        $('<option></option>').val(currency['code']).text(`${currency['code']} : ${currency['name']}`)
                    );
                });
            });

            // Handle currency change
            $siteCurrency.on('change', function () {
                let selectedCurrency = $(this).val();

                // Find the selected currency symbol
                let currencySymbol = currencies['fiat'].find(currency => currency['code'] === selectedCurrency) ||
                    currencies['crypto'].find(currency => currency['code'] === selectedCurrency);

                // Update the currency symbol input
                if (currencySymbol) {
                    $currencySymbol.val(currencySymbol['symbol']);
                }
            });
        });
    </script>
<?php $__env->stopPush(); ?>




<?php echo $__env->make('backend.settings.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/gratechcms/resources/views/backend/settings/site/index.blade.php ENDPATH**/ ?>