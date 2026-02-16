@props([
    'id' => null,
])

@php
    $baseClasses = '';
@endphp

<div
    class="group/switch relative flex w-8 rounded-full border bg-input transition-colors duration-100 ease-out will-change-[color] has-checked:border-primary has-checked:bg-primary"
>
    <input type="checkbox" class="absolute inset-0 appearance-none" id="{{ $id }}" />
    <span
        class="pointer-events-none flex size-4 scale-80 items-center justify-center rounded-full bg-background transition-transform duration-100 will-change-transform group-has-checked/switch:translate-x-[calc(100%-2px)] [&_svg]:size-2.5"
    >
        <i data-lucide="check" class="hidden text-primary group-has-checked/switch:block"></i>
        <i data-lucide="x" class="block text-muted-foreground group-has-checked/switch:hidden"></i>
    </span>
</div>
