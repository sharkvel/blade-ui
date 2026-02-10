@php
    /**
     * Base classes
     */
    $baseClasses = "border-l-2 pl-6 italic";
@endphp

<blockquote {{ $attributes->merge(["class" => cn($baseClasses, $attributes->get("class"))]) }}>{{ $slot }}</blockquote>
