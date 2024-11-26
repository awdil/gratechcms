<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['name', 'width' => null, 'height' => null, 'class' => '']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['name', 'width' => null, 'height' => null, 'class' => '']); ?>
<?php foreach (array_filter((['name', 'width' => null, 'height' => null, 'class' => '']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?><?php    $svgContent = (new \App\View\Components\Svg($name))->svgContent();    if ($svgContent) {        $dom = new DOMDocument();        $dom->loadXML($svgContent);        $svg = $dom->getElementsByTagName('svg')->item(0);        if ($width) {            $svg->setAttribute('width', $width);        }        if ($height) {            $svg->setAttribute('height', $height);        }        if ($class) {            $existingClasses = $svg->getAttribute('class');            $svg->setAttribute('class', trim("$existingClasses $class"));        }        $svgContent = $dom->saveXML($svg);    }?><?php if($svgContent): ?>    <?php echo $svgContent; ?><?php else: ?>        <i class="fa-solid fa-info"></i><?php endif; ?><?php /**PATH /Users/apple/Documents/gratech/resources/views/components/icon.blade.php ENDPATH**/ ?>