@php
    use Illuminate\Support\Uri;
    $contentUri = Uri::route('component', 'table');

    $onThisPage = [
        [
            'url' => $contentUri->withFragment('installation')->value(),
            'name' => 'Installation',
            'available_from' => '2026-01-20',
        ],
        [
            'url' => $contentUri->withFragment('usage')->value(),
            'name' => 'Usage',
            'available_from' => '2026-01-20',
        ],
    ];
@endphp

<x-slot name="componentMeta" :onThisPage="$onThisPage"></x-slot>

<div class="flex flex-col">
    {{-- Base --}}
    <x-ui.h1 class="text-4xl font-medium">Table</x-ui.h1>
    <x-ui.p class="mt-4 max-w-[55ch] text-muted-foreground">A responsive table component.</x-ui.p>
    <x-playground class="mt-12" example="examples.components.table.hero" />

    {{-- Installation --}}
    <x-ui.h6 class="mt-16 max-w-fit font-medium">
        <a href="#installation" class="hash-link">Installation</a>
    </x-ui.h6>
    <div class="mt-6 rounded-lg border p-1 pt-0">
        <div class="flex h-9 items-center px-4">
            <div class="flex items-center gap-2 text-muted-foreground">
                <i data-lucide="terminal" class="size-4"></i>
                <x-ui.label class="font-mono leading-none font-normal text-muted-foreground">Terminal</x-ui.label>
            </div>
        </div>
        <x-ui.codelight language="shell">php artisan ui:add table</x-ui.codelight>
    </div>

    {{-- Usage --}}
    <x-ui.h6 class="mt-16 max-w-fit font-medium">
        <a href="#usage" class="hash-link">Usage</a>
    </x-ui.h6>
    <div class="mt-6 rounded-lg border p-1">
        <x-ui.codelight example="examples.components.table.usage" />
    </div>
</div>
