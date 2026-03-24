@php
    $baseClasses = 'w-full text-sm outline-hidden disabled:opacity-50';
@endphp

<div data-slot="command-input-wrapper" class="p-3 pb-0">
    <x-ui.input-group class="border-input/30 bg-input/30 shadow-none!">
        <x-ui.input-group.input
            data-slot="command-input"
            x-model="query"
            {{ $attributes
            ->except('class')
            ->merge(['class' => cn($baseClasses, $attributes->get('class'))], escape: false) }}
            placeholder="Search documentation..."
        />

        <x-ui.input-group.addon>
            <i data-lucide="search" data-icon="inline-start" class="shrink-0"></i>
        </x-ui.input-group.addon>
    </x-ui.input-group>
</div>
