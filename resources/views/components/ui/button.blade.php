@props([
    "variant" => "default",
    "size" => "default",
    "type" => "button",
])

@php
    /**
     * Base classes
     */
    $baseClasses = "inline-flex shrink-0 items-center justify-center gap-2 rounded-md text-sm font-medium whitespace-nowrap outline-none focus-visible:border-ring focus-visible:ring-[3px] focus-visible:ring-ring/50 disabled:pointer-events-none disabled:opacity-50 aria-invalid:border-destructive aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 [&_svg]:pointer-events-none [&_svg]:shrink-0 [&_svg:not([class*=size-])]:size-4";

    /**
     * Variant classes
     */
    $variantClasses = match ($variant) {
        "default" => "bg-primary text-primary-foreground hover:bg-primary/90",
        "secondary" => "bg-secondary text-secondary-foreground hover:bg-secondary/80",
        "outline" => "border bg-background hover:bg-accent hover:text-accent-foreground dark:border-input dark:bg-input/30 dark:hover:bg-input/50",
        "ghost" => "hover:bg-accent hover:text-accent-foreground dark:hover:bg-accent/50",
        "destructive" => "bg-destructive text-destructive-foreground hover:bg-destructive/90 focus-visible:ring-destructive/20 dark:bg-destructive/60 dark:focus-visible:ring-destructive/40",
        "link" => "text-primary underline-offset-4 hover:underline",
    };

    /**
     * Size classes
     */
    $sizeClasses = match ($size) {
        "xs" => "h-7 gap-1 px-2.5 text-xs has-data-[icon=inline-end]:pr-2 has-data-[icon=inline-start]:pl-2 [&_svg:not([class*=size-])]:size-3.5",
        "sm" => "h-8 gap-1.5 px-3 has-data-[icon=inline-end]:pr-2 has-data-[icon=inline-start]:pl-2",
        "default" => "h-9 gap-2 px-4 has-data-[icon=inline-end]:pr-2.5 has-data-[icon=inline-start]:pl-2.5",
        "lg" => "h-10 gap-2.5 px-5 has-data-[icon=inline-end]:pr-3 has-data-[icon=inline-start]:pl-3",
        "icon-xs" => "size-7 [&_svg:not([class*=size-])]:size-3.5",
        "icon-sm" => "size-8",
        "icon" => "size-9",
        "icon-lg" => "size-10",
    };
@endphp

<button {{ $attributes->merge(["class" => cn($baseClasses, $variantClasses, $sizeClasses, $attributes->get("class")), "type" => $type]) }}>
    {{ $slot }}
</button>
