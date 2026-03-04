@php
    $baseClasses = 'overflow-hidden p-1';
@endphp

<div
    data-slot="command-group"
    {{
        $attributes->merge([
            'class' => cn($baseClasses, $attributes->get('class')),
        ])
    }}
>
    {{ $slot }}
</div>
