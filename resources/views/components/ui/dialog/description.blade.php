@php
    $baseClasses = 'text-sm text-muted-foreground';
@endphp

<div
    data-slot="dialog-description"
    {{ $attributes->merge([
            'class' => cn($baseClasses, $attributes->get('class')),
        ]) }}
>
    {{ $slot }}
</div>
