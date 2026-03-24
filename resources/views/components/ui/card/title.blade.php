<div
    data-slot="card-title"
    {{ $attributes
    ->except('class')
    ->merge([
            'class' => cn('leading-none font-semibold', $attributes->get('class')),
        ]) }}
>{{ $slot }}</div>
