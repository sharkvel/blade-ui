@php
    /**
     * Base Classes
     */
    $baseClasses = "text-5xl leading-tight tracking-tight";
@endphp

<h1 {{ $attributes->merge(["class" => cn($baseClasses, $attributes->get("class"))]) }}>{{ $slot }}</h1>
