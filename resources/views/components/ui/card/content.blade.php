<div
    data-slot="card-content"
    {{
        $attributes->merge([
            'class' => cn('px-5', $attributes->get('class')),
        ])
    }}
>
    {{ $slot }}
</div>
