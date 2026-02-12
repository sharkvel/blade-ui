@props([
    'variant' => 'legend',
])

@php
    /**
     * Base classes
     */
    $baseClasses = 'mb-3 font-medium';

    /**
     * Variant classes
     */
    $variantClasses = match ($variant) {
        'legend' => 'text-base',
        'label' => 'text-sm',
    };
@endphp

<legend data-slot="field-legend" {{
    $attributes->merge([
        'class' => cn($baseClasses, $variantClasses, $attributes->get('class')),
    ])
}}>
    {{ $slot }}
</legend>
