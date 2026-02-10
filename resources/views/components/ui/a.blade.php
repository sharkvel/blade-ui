@props([
    "href" => "",
])

@php
    /**
     * Base classes
     */
    $baseClasses = "inline-block cursor-pointer [font-size:inherit] leading-[inherit] font-medium text-primary underline underline-offset-2 transition-colors hover:text-primary disabled:pointer-events-none disabled:opacity-50 **:data-[icon=inline-end]:ml-1 **:data-[icon=inline-start]:mr-1 [&_svg]:pointer-events-none [&_svg]:shrink-0 [&_svg:not([class*=size-])]:size-3.5 [&>svg]:inline-block";
@endphp

<a {{ $attributes->merge(["class" => cn($baseClasses, $attributes->get("class")), "href" => $href]) }}>{{ $slot }}</a>
