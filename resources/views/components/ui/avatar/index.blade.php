@props([
    'size' => 'default',
])
@aware(['size' => 'default'])
@php
    /**
     * Base classes
     */
    $baseClasses = 'group/avatar relative flex shrink-0 rounded-full select-none after:absolute after:inset-0 after:rounded-full after:border after:border-border after:mix-blend-darken dark:after:mix-blend-lighten';

    /**
     * Size classes
     */
    $sizeClasses = match ($size) {
        'sm' => 'size-6',
        'default' => 'size-8',
        'lg' => 'size-10',
    };
@endphp

<div
    data-slot="avatar"
    x-data="{ isLoaded: false }"
    {{
        $attributes->merge([
            'class' => cn($baseClasses, $sizeClasses, $attributes->get('class')),
        ])
    }}
>
    {{ $slot }}
</div>
