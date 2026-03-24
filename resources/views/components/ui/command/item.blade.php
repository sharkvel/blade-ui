@props([
    'value' => null,
])
@php
    $baseClasses = 'group/command-item relative flex h-9 cursor-default items-center gap-2 rounded-sm px-3 py-1.5 text-sm outline-hidden select-none in-data-[slot=dialog-content]:rounded-lg! has-data-[icon=inline-end]:pr-2.5 has-data-[icon=inline-start]:pl-2.5 data-selected:bg-muted data-selected:text-foreground data-[disabled=true]:pointer-events-none data-[disabled=true]:opacity-50 [&_svg]:pointer-events-none [&_svg]:shrink-0 [&_svg]:text-muted-foreground [&_svg:not([class*=size-])]:size-4 data-selected:*:[svg]:text-foreground';
@endphp

<div
    data-slot="command-item"
    data-command-value="{{ $value }}"
    {{ $attributes
    ->except('class')
    ->merge([
            'class' => cn($baseClasses, $attributes->get('class')),
        ]) }}
>{{ $slot }}</div>
