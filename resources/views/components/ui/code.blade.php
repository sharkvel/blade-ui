@php
    $baseClasses = 'relative rounded bg-muted px-1 py-0.5 font-mono text-sm';
@endphp

<code
    {{ $attributes
    ->except('class')
    ->merge(['class' => cn($baseClasses, $attributes->get('class'))]) }}
>{{ $slot }}</code>
