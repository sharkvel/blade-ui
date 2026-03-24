@php
    $baseClasses = 'border-t bg-muted/50 font-medium [&>tr]:last:border-b-0';
@endphp

<tfoot
    {{ $attributes->except('class')->merge(['class' => cn($baseClasses, $attributes->get('class'))]) }}
>{{ $slot }}</tfoot>
