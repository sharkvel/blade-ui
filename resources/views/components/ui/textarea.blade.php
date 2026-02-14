@props([
    "variant" => "default",
    "size" => "default",
])

@php
    /**
     * Base classes
     */
    $baseClasses = "flex field-sizing-content w-full resize-y rounded-md border border-transparent bg-transparent text-base transition-colors outline-none placeholder:text-muted-foreground focus-within:border-ring focus-visible:ring-2 focus-visible:ring-ring/40 disabled:pointer-events-none disabled:opacity-50 md:text-sm";

    /**
     * Variant classes
     */
    $variantClasses = match ($variant) {
        "default" => "border-input dark:bg-input/30",
    };

    /**
     * Size classes
     */
    $sizeClasses = match ($size) {
        "sm" => "min-h-24 px-3 py-2",
        "default" => "min-h-36 px-3 py-2",
        "lg" => "min-h-48 px-3 py-2",
    };
@endphp

<textarea {{ $attributes->merge(["class" => cn($baseClasses, $variantClasses, $sizeClasses, $attributes->get("class"))]) }}>{{ $slot }}</textarea>
