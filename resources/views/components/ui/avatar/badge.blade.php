@aware(['size' => 'default'])
@php
    /**
     * Base classes
     */
    $baseClasses = 'absolute right-0 bottom-0 z-10 inline-flex items-center justify-center rounded-full bg-primary text-primary-foreground bg-blend-color ring-2 ring-background select-none';

    $sizeClasses = match ($size) {
        'sm' => 'size-2 [&>svg]:hidden',
        'default' => 'size-2.5 [&>svg]:size-2',
        'lg' => 'size-3 [&>svg]:size-2',
    };
@endphp

<span
    data-slot="avatar-badge"
    {{
        $attributes->merge([
            'class' => cn($baseClasses, $sizeClasses, $attributes->get('class')),
        ])
    }}
>
    {{ $slot }}
</span>
