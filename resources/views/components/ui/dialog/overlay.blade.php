@php
    $baseClasses =
        'fixed inset-0 isolate z-50 bg-black/10 duration-100 data-closed:animate-out data-closed:fade-out-0 data-open:animate-in data-open:fade-in-0 supports-backdrop-filter:backdrop-blur-xs';
@endphp

<div
    data-slot="dialog-overlay"
    :data-open="open"
    :data-closed="!open"
    @click="open = false;"
    {{
        $attributes->merge([
            'class' => cn($baseClasses, $attributes->get('class')),
        ])
    }}
>
    {{ $slot }}
</div>
