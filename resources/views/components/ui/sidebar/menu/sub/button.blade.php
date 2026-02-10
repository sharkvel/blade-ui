@php
    /**
     * Base Classes
     */
    $baseClasses =
        "flex h-7 w-full items-center gap-2 rounded-md px-2 text-sidebar-foreground ring-sidebar-ring hover:bg-sidebar-accent hover:text-sidebar-accent-foreground active:bg-sidebar-accent active:text-sidebar-accent-foreground data-[active=true]:bg-sidebar-accent data-[active=true]:text-sidebar-accent-foreground [&_svg]:size-4 [&>svg]:text-sidebar-accent-foreground";
@endphp

<button {{ $attributes->merge(["class" => cn($baseClasses, $attributes->get("class"))]) }}>{{ $slot }}</button>
