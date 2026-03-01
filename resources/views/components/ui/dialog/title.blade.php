@php
    $baseClasses = 'text-base leading-none font-semibold';
@endphp

<div
    data-slot="dialog-title"
    {{
        $attributes->merge([
            'class' => cn($baseClasses, $attributes->get('class')),
        ])
    }}
>
    {{ $slot }}
</div>
