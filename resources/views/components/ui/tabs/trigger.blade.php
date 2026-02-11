@aware(["defaultValue", "variant" => "default", "size" => "default"])

@php
    /**
     * Base classes
     */
    $baseClasses = "relative inline-flex items-center justify-center gap-2 text-sm leading-none font-medium whitespace-nowrap text-muted-foreground hover:text-foreground disabled:opacity-50 [&_svg:not([class*=size-])]:size-4";

    /**
     * Variant classes
     */
    $variantClasses = match ($variant) {
        "default" => "rounded-md border border-transparent data-[state=active]:bg-background data-[state=active]:text-foreground data-[state=active]:shadow-sm dark:data-[state=active]:border-input dark:data-[state=active]:bg-input/30",
        "line" => "after:absolute after:-bottom-1 after:w-full after:border-b-2 after:border-transparent data-[state=active]:text-foreground data-[state=active]:after:border-foreground",
        "simple" => "data-[state=active]:text-foreground",
    };

    /**
     * Size classes
     */
    $sizeClasses = match ($size) {
        "sm" => "h-6 gap-1.5 px-2",
        "default" => "h-7 px-2 py-1",
        "lg" => "h-8 px-2.5",
        "icon-sm" => "size-6",
        "icon" => "size-7",
        "icon-lg" => "size-8",
    };
@endphp

<button
    {{ $attributes->merge(["class" => cn($baseClasses, $variantClasses, $sizeClasses, $attributes->get("class"))]) }}
    @click="tab='{{ $value }}'"
    data-state="{{ $value === $defaultValue ? "active" : "inactive" }}"
    :data-state="tab === '{{ $value }}' ? 'active' : 'inactive'"
>
    {{ $slot }}
</button>
