@php
    /**
     * Base Classes
     */
    $baseClasses = 'text-lg';
@endphp

<h6 {{ $attributes->merge(['class' => cn($baseClasses, $attributes->get('class'))]) }}>{{ $slot }}</h6>
