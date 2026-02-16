<div
    data-slot="card-title"
    {{
        $attributes->merge([
            'class' => cn('leading-none font-semibold', $attributes->get('class')),
        ])
    }}
>
    {{ $slot }}
</div>
