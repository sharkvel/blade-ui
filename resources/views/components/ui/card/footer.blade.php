<div
    data-slot="card-footer"
    {{ $attributes
    ->except('class')
    ->merge([
            'class' => cn('flex items-center px-6 [.border-t]:pt-6', $attributes->get('class')),
        ]) }}
>{{ $slot }}</div>
