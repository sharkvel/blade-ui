@php
    $notFirst = preg_match('/\b(mt|my)-\S*/', $attributes['class'] ?? '') ? '' : 'not-first:mt-6';
    $baseClasses = "text-base leading-relaxed $notFirst";
@endphp

<p
    {{ $attributes
    ->except('class')
    ->merge(['class' => cn($baseClasses, $attributes->get('class'))]) }}
>{{ $slot }}</p>
