@props([
    'value' => null,
])
@php
    $baseClasses = 'group/command-item relative flex cursor-default items-center gap-2 rounded-sm px-2 py-1.5 text-sm outline-hidden select-none in-data-[slot=dialog-content]:rounded-lg! data-selected:bg-muted data-selected:text-foreground data-[disabled=true]:pointer-events-none data-[disabled=true]:opacity-50 [&_svg]:pointer-events-none [&_svg]:shrink-0 [&_svg:not([class*=size-])]:size-4 data-selected:*:[svg]:text-foreground';
@endphp

<div
    data-slot="command-item"
    data-command-value="{{ $value }}"
    {{
        $attributes->merge([
            'class' => cn($baseClasses, $attributes->get('class')),
        ])
    }}
>
    {{ $slot }}
</div>
