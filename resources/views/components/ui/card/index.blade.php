<div
    data-slot="card"
    {{
        $attributes->merge([
            'class' => cn('bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-5', $attributes->get('class')),
        ])
    }}
>
    {{ $slot }}
</div>
