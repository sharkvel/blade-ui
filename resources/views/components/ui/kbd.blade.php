@props([
    "variant" => "default",
    "size" => "default",
])

@php
    /**
     * Base classes
     */
    $baseClasses = "inline-flex items-center justify-center gap-0.5 rounded-sm border border-transparent font-mono text-sm leading-none whitespace-nowrap transition-colors select-none disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:shrink-0 [&_svg:not([class*=size-])]:size-4";

    /**
     * Variant classes
     */
    $variantClasses = match ($variant) {
        "default" => "bg-primary text-primary-foreground",
        "secondary" => "bg-muted text-muted-foreground",
        "outline" => "border-border text-muted-foreground",
    };

    /**
     * Size classes
     */
    $sizeClasses = match ($size) {
        "sm" => "h-6 px-2 has-[svg]:px-1.5 [&_svg:not([class*=size-])]:size-3",
        "default" => "h-8 px-3 has-[svg]:px-2",
        "icon-sm" => "size-6 [&_svg:not([class*=size-])]:size-3",
        "icon" => "size-8",
    };
@endphp

<kbd {{ $attributes->merge(["class" => cn($baseClasses, $variantClasses, $sizeClasses, $attributes->get("class"))]) }}>{{ $slot }}</kbd>
