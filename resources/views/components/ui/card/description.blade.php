<div
    data-slot="card-description"
    {{
        $attributes->merge([
            'class' => cn('text-muted-foreground text-sm', $attributes->get('class')),
        ])
    }}
>
    {{ $slot }}
</div>
