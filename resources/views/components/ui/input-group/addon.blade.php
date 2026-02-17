@props([
    'align' => 'inline-start',
])

@php
    $baseClasses = "text-muted-foreground flex h-auto cursor-text items-center justify-center gap-2 py-1.5 text-sm font-medium select-none [&>svg:not([class*='size-'])]:size-4 [&>kbd]:rounded-[calc(var(--radius)-5px)] group-data-[disabled=true]/input-group:opacity-50";
    $alignClasses = match ($align) {
        'inline-start' => 'order-first pl-3 has-data-[icon=inline-start]:pl-2.5 has-[>button]:ml-[-0.45rem] has-[>kbd]:ml-[-0.35rem]',
        'inline-end' => 'order-last pr-3 has-data-[icon=inline-end]:pr-2.5 has-[>button]:mr-[-0.45rem] has-[>kbd]:mr-[-0.35rem]',
        'block-start' => 'order-first w-full justify-start px-3 pt-3 group-has-[>input]/input-group:pt-2.5 [.border-b]:pb-3',
        'block-end' => 'order-last w-full justify-start px-3 pb-3 group-has-[>input]/input-group:pb-2.5 [.border-t]:pt-3',
    };
@endphp

<div
    role="group"
    data-slot="input-group-addon"
    data-align="{{ $align }}"
    x-data
    @click="!$event.target.closest('button') && $event.currentTarget.parentElement?.querySelector('input')?.focus()"
    {{
        $attributes->merge([
            'class' => cn($baseClasses, $alignClasses, $attributes->get('class')),
        ])
    }}
>
    {{ $slot }}
</div>
