@php
    /**
     * Base Classes
     */
    $baseClasses = '[&_tr]:border-b';
@endphp

<thead {{ $attributes->merge(['class' => cn($baseClasses, $attributes->get('class'))]) }}>{{ $slot }}</thead>
