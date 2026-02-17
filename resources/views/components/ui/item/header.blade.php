@php
    $baseClasses = 'flex basis-full items-center justify-between gap-2';
@endphp

<div
    data-slot="item-header"
    {{
        $attributes->merge([
            'class' => cn($baseClasses, $attributes->get('class')),
        ])
    }}
>
    {{ $slot }}
</div>
