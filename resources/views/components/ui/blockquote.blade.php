@php
    $baseClasses = 'border-l-2 pl-6 italic';
@endphp

<blockquote
    {{ $attributes->except('class')->merge(['class' => cn($baseClasses, $attributes->get('class'))]) }}
>{{ $slot }}</blockquote>
