@props([
    'id' => null,
    'name' => null,
    'disabled' => false,
    'size' => 'default',
])

@php
    $baseClasses = 'group/switch relative flex rounded-full border bg-input transition-colors duration-100 ease-out will-change-[color] has-checked:border-primary has-checked:bg-primary has-disabled:opacity-50 dark:border-transparent dark:bg-input/35';
    $sizeClasses = match ($size) {
        'sm' => 'w-6 *:data-[slot=switch-thumb]:size-3',
        'default' => 'w-8 *:data-[slot=switch-thumb]:size-4',
        'lg' => 'w-10 *:data-[slot=switch-thumb]:size-5',
    };
@endphp

<div data-slot="switch" class="{{ cn($baseClasses, $sizeClasses, $attributes->get('class')) }}">
    <input
        type="checkbox"
        class="absolute inset-0 appearance-none rounded-full outline-none focus-visible:border-ring focus-visible:ring-[3px] focus-visible:ring-ring/50 aria-invalid:border-destructive aria-invalid:ring-3 aria-invalid:ring-destructive/20 dark:aria-invalid:border-destructive/50 dark:aria-invalid:ring-destructive/40"
        id="{{ $id }}"
        name="{{ $name }}"
        @disabled($disabled)
    />
    <span
        data-slot="switch-thumb"
        class="pointer-events-none flex scale-80 items-center justify-center rounded-full bg-background transition-transform duration-100 will-change-transform group-has-checked/switch:translate-x-[calc(100%-2px)] group-has-checked/switch:bg-primary-foreground dark:bg-foreground dark:group-has-checked/switch:bg-primary-foreground [&_svg]:size-2.5"
    >
        <i data-lucide="check" class="hidden text-primary group-has-checked/switch:block"></i>
        <i data-lucide="x" class="block text-muted-foreground group-has-checked/switch:hidden dark:text-black"></i>
    </span>
</div>
