@php
    $baseClasses = 'group/item-group flex flex-col';
@endphp

<div role="list" data-slot="item-group" {{
    $attributes->merge([
        'class' => cn($baseClasses, $attributes->get('class')),
    ])
}}>
    {{ $slot }}
</div>
