@php
    /**
     * Base Classes
     */
    $notFirst = preg_match("/\b(mt|my)-\S*/", $attributes["class"] ?? "") ? "" : "not-first:mt-6";
    $baseClasses = "text-base leading-relaxed $notFirst";
@endphp

<p {{ $attributes->merge(["class" => cn($baseClasses, $attributes->get("class"))]) }}>{{ $slot }}</p>
