@php
    /**
     * Base Classes
     */
    $baseClasses =
        "fixed top-0 left-0 z-10 flex h-full max-h-svh w-3xs -translate-x-full flex-col border-sidebar-border bg-sidebar text-sidebar-foreground will-change-transform md:translate-x-0";
@endphp

<aside
    {{ $attributes->merge(["class" => cn($baseClasses, $attributes->get("class"))]) }}
    :class="{
        '-translate-x-full':!open,
        'md:translate-x-0':open
        }"
    @click.outside="(window.innerWidth < 768 && !$event.target.closest('[data-trigger=sidebar]')) ? open = false : ''"
>
    {{ $slot }}
</aside>
