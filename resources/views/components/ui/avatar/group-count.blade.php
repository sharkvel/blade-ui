@aware(['size' => 'default'])
@php
    /**
     * Base classes
     */
    $baseClasses = 'relative flex shrink-0 items-center justify-center rounded-full bg-muted text-sm text-muted-foreground ring-2 ring-background group-has-data-[size=lg]/avatar-group:[&>svg]:size-5 group-has-data-[size=sm]/avatar-group:[&>svg]:size-3';

    /**
     * Size classes
     */
    $sizeClasses = match ($size) {
        'sm' => 'size-6 [&>svg]:size-3',
        'default' => 'size-8 [&>svg]:size-4',
        'lg' => 'size-10 [&>svg]:size-5',
    };
@endphp

<div data-slot="avatar-group-count" {{
    $attributes->merge([
        'class' => cn($baseClasses, $sizeClasses, $attributes->get('class')),
    ])
}}>
    {{ $slot }}
</div>
