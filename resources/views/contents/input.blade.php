@php
    use Illuminate\Support\Uri;
    $contentUri = Uri::route('component', 'input');

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
        [
            'url' => $contentUri->withFragment('reference')->value(),
            'name' => 'Reference',
            'available_from' => '2026-01-20',
        ],
    ];
@endphp

<x-slot name="componentMeta" :onThisPage="$onThisPage"></x-slot>

<div class="flex flex-col">
    <x-ui.h1 class="text-4xl font-medium">Input</x-ui.h1>
    <x-ui.p class="mt-4 max-w-[55ch] text-muted-foreground">
        Displays a form input field or a component that looks like an input field.
    </x-ui.p>
    <x-playground class="mt-12 [&_input]:max-w-xs" path="examples/components/input/hero.blade.php" />
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
        <x-ui.codelight language="shell">php artisan ui:add input</x-ui.codelight>
    </div>
    {{-- Usage --}}
    <x-ui.h6 class="mt-16 max-w-fit font-medium">
        <a href="#usage" class="hash-link">Usage</a>
    </x-ui.h6>
    <div class="mt-6 rounded-lg border p-1">
        <x-ui.codelight path="examples/components/input/usage/blade.php" />
    </div>
    {{-- Reference --}}
    <x-ui.h6 class="mt-16 max-w-fit font-medium">
        <a href="#reference" class="hash-link">Reference</a>
    </x-ui.h6>
    <x-ui.p class="mt-4 max-w-[60ch]">
        The
        <x-ui.code>
            @verbatim x-ui.input @endverbatim
                
        </x-ui.code>
        component is a wrapper around the
        <x-ui.code>input</x-ui.code>
        element that adds a variety of styles and functionality.
    </x-ui.p>
    <div class="mt-6 rounded-lg border">
        <x-ui.table>
            <x-ui.table.header>
                <x-ui.table.row>
                    <x-ui.table.head class="px-4">Prop</x-ui.table.head>
                    <x-ui.table.head class="px-4">Type</x-ui.table.head>
                    <x-ui.table.head class="px-4">Default</x-ui.table.head>
                </x-ui.table.row>
            </x-ui.table.header>
            <x-ui.table.body>
                <x-ui.table.row>
                    <x-ui.table.cell class="px-4">size</x-ui.table.cell>
                    <x-ui.table.cell class="px-4">"default" | "sm" | "lg"</x-ui.table.cell>
                    <x-ui.table.cell class="px-4">"default"</x-ui.table.cell>
                </x-ui.table.row>
            </x-ui.table.body>
        </x-ui.table>
    </div>
</div>
