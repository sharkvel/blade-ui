@props(['title' => ''])
@php
    $baseClasses = 'flex flex-col overflow-hidden px-3 pt-3 outline-none has-data-[slot=command-group-title]:pt-0';
@endphp

<div
    data-slot="command-group"
    {{
        $attributes->merge([
            'class' => cn($baseClasses, $attributes->get('class')),
        ])
    }}
>
    @if (filled($title))
        <x-ui.label data-slot="command-group-title" class="px-3 py-1.5 pt-4 text-xs text-muted-foreground">
            {{ $title }}
        </x-ui.label>
    @endif

    {{ $slot }}
</div>
