@aware(['size' => 'default'])
@php
    /**
     * Base classes
     */
    $baseClasses = 'flex size-full items-center justify-center rounded-full bg-muted text-sm text-muted-foreground';

    /**
     * Size classes
     */
    $sizeClasses = match ($size) {
        'default' => '',
        'sm' => 'text-xs',
        'lg' => '',
    };
@endphp

<span
    data-slot="avatar-fallback"
    x-effect="isLoaded && $el.remove()"
    {{
        $attributes->merge([
            'class' => cn($baseClasses, $sizeClasses, $attributes->get('class')),
        ])
    }}
>
    {{ $slot }}
</span>
