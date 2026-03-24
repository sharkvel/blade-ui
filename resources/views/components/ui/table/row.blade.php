@php
    $baseClasses = 'border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted';
@endphp

<tr
    {{ $attributes->except('class')->merge(['class' => cn($baseClasses, $attributes->get('class'))]) }}
>{{ $slot }}</tr>
