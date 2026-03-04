@props([
    'title' => 'Command Palette',
    'description' => 'Search for a command to run...',
    'showCloseButton' => false,
    'variant' => 'modern',
    'triggerId' => null,
])

@php
    $baseClasses = 'top-[15%] translate-y-0 overflow-hidden p-0';
@endphp

<x-ui.dialog {{ $attributes->except(['class']) }}>
    <x-ui.dialog.trigger
        id="{{ $triggerId }}"
        shortcut="ctrl.k"
        enableEsc
        class="hidden!"
        tabindex="-1"
    ></x-ui.dialog.trigger>
    <x-ui.dialog.content
        @class([cn($baseClasses, $attributes->get(key: 'class'))])
        :variant="$variant"
        :showCloseButton="$showCloseButton"
    >
        {{ $slot }}
    </x-ui.dialog.content>
</x-ui.dialog>
