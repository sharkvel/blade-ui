@props([
    "variant" => "default",
    "size" => "default",
])
@php
    /**
     * Base classes
     */
    $baseClasses = "flex items-center";

    /**
     * Variant classes
     */
    $variantClasses = match ($variant) {
        "default" => "rounded-lg bg-muted",
        "line" => "",
        "simple" => "",
    };

    /**
     * Size classes
     */
    $sizeClasses = match ($size) {
        "sm" => "h-8 p-1",
        "default" => "h-9 p-1",
        "lg" => "h-10 p-1",
        "icon-sm" => "h-8 p-1",
        "icon" => "h-9 p-1",
        "icon-lg" => "h-10 p-1",
    };
@endphp

<div {{ $attributes->merge(["class" => cn($baseClasses, $variantClasses, $sizeClasses, $attributes->get("class"))]) }}>
    {{ $slot }}
</div>
