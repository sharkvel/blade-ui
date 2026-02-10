@php
    /**
     * Base Classes
     */
    $baseClasses = "text-xl";
@endphp

<h5 {{ $attributes->merge(["class" => cn($baseClasses, $attributes->get("class"))]) }}>{{ $slot }}</h5>
