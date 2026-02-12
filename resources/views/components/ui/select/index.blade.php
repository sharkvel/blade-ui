@props([
    "variant" => "default",
    "size" => "default",
    "defaultValue" => "",
    "placeholder" => "",
])

@php
    /**
     * Base classes
     */
    $baseClasses = "inline-flex w-full min-w-0 shrink-0 appearance-none items-center justify-center gap-1.5 rounded-md border border-transparent text-sm leading-none whitespace-nowrap transition-colors outline-none *:text-sm focus-within:border-ring focus-visible:ring-2 focus-visible:ring-ring/40 disabled:pointer-events-none disabled:opacity-50";

    /**
     * Variant classes
     */
    $variantClasses = match ($variant) {
        "default" => "border-input shadow-xs dark:bg-input/30 dark:hover:bg-input/50",
    };

    /**
     * Size classes
     */
    $sizeClasses = match ($size) {
        "sm" => "h-8 px-3 pr-8.5",
        "default" => "h-9 px-3 pr-8.5",
        "lg" => "h-10 px-3 pr-8.5",
    };
@endphp

<div class="relative shrink-0">
    <select {{ $attributes->merge(["class" => cn($baseClasses, $variantClasses, $sizeClasses, $attributes->get("class"))]) }}>
        @if (! empty($placeholder))
            <option value="" selected disabled hidden>{{ $placeholder }}</option>
        @endif

        {{ $slot }}
    </select>
    <i data-lucide="chevrons-up-down" class="pointer-events-none absolute top-1/2 right-2.5 size-4 -translate-y-1/2"></i>
</div>
