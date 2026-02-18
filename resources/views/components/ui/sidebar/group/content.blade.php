@php
    /**
     * Base Classes
     */
    $baseClasses = 'w-full text-sm';
@endphp

<div {{ $attributes->merge(['class' => cn($baseClasses, $attributes->get('class'))]) }}>{{ $slot }}</div>
