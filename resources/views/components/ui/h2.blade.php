@php
    /**
     * Base Classes
     */
    $baseClasses = "text-4xl leading-tight tracking-tight";
@endphp

<h2 {{ $attributes->merge(["class" => cn($baseClasses, $attributes->get("class"))]) }}>{{ $slot }}</h2>
