<div
    data-slot="card-description"
    {{ $attributes
    ->except('class')
    ->merge([
            'class' => cn('text-muted-foreground text-sm', $attributes->get('class')),
        ]) }}
>{{ $slot }}</div>
