<div
    data-slot="card-content"
    {{ $attributes
    ->except('class')
    ->merge([
            'class' => cn('px-5', $attributes->get('class')),
        ]) }}
>{{ $slot }}</div>
