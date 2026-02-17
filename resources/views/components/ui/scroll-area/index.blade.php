@props([
    'orientation' => 'vertical',
    'scrollbar' => 'auto',
])

@php
    $baseClasses = 'relative [scrollbar-color:var(--color-scrollbar-thumb)_transparent]';
    $orientationClasses = match ($orientation) {
        'vertical' => 'overflow-x-hidden [scrollbar-gutter:stable_both-edges] data-[scrollbar=auto]:overflow-y-hidden data-[scrollbar=auto]:hover:overflow-y-auto data-[scrollbar=hidden]:[scrollbar-width:none] data-[scrollbar=visible]:overflow-y-auto',
        'horizontal' => 'overflow-y-hidden data-[scrollbar=auto]:overflow-x-hidden data-[scrollbar=auto]:hover:overflow-x-auto data-[scrollbar=hidden]:[scrollbar-width:none] data-[scrollbar=visible]:overflow-x-auto',
        'both' => '[scrollbar-gutter:stable_both-edges] data-[scrollbar=auto]:overflow-hidden data-[scrollbar=auto]:hover:overflow-auto data-[scrollbar=hidden]:[scrollbar-width:none] data-[scrollbar=visible]:overflow-auto',
    };
@endphp

<div
    data-slot="scroll-area"
    data-orientation="{{ $orientation }}"
    data-scrollbar="{{ $scrollbar }}"
    {{
        $attributes->merge([
            'class' => cn($baseClasses, $orientationClasses, $attributes->get('class')),
        ])
    }}
>
    <div
        data-slot="scroll-area-viewport"
        class="size-full rounded-[inherit] transition-[color,box-shadow] outline-none focus-visible:ring-[3px] focus-visible:ring-ring/50 focus-visible:outline-1"
    >
        {{ $slot }}
    </div>
</div>
