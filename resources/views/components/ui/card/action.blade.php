<div
    data-slot="card-action"
    {{
        $attributes->merge([
            'class' => cn('col-start-2 row-span-2 row-start-1 self-start justify-self-end', $attributes->get('class')),
        ])
    }}
>
    {{ $slot }}
</div>
