@php
    use Illuminate\Support\Uri;
    $contentUri = Uri::route("component", "textarea");

    $onThisPage = [
        [
            "url" => $contentUri->withFragment("installation")->value(),
            "name" => "Installation",
            "available_from" => "2026-01-20",
        ],
        [
            "url" => $contentUri->withFragment("usage")->value(),
            "name" => "Usage",
            "available_from" => "2026-01-20",
        ],
        [
            "url" => $contentUri->withFragment("reference")->value(),
            "name" => "Reference",
            "available_from" => "2026-01-20",
        ],
    ];
@endphp

<x-slot name="componentMeta" :onThisPage="$onThisPage"></x-slot>

<div class="flex flex-col">
    {{-- Base --}}
    <x-ui.h1 class="text-4xl font-medium">Textarea</x-ui.h1>
    <x-ui.p class="mt-4 max-w-[55ch] text-muted-foreground">Displays a form textarea or a component that looks like a textarea.</x-ui.p>
    <x-playground class="mt-12" example="examples.components.textarea.hero" />

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
        <x-ui.codelight language="shell">php artisan ui:add textarea</x-ui.codelight>
    </div>

    {{-- Usage --}}
    <x-ui.h6 class="mt-16 max-w-fit font-medium">
        <a href="#usage" class="hash-link">Usage</a>
    </x-ui.h6>
    <div class="mt-6 rounded-lg border p-1">
        <x-ui.codelight example="examples.components.textarea.usage" />
    </div>

    {{-- Reference --}}
    <x-ui.h6 class="mt-16 max-w-fit font-medium">
        <a href="#reference" class="hash-link">Reference</a>
    </x-ui.h6>
    <x-ui.p class="mt-4 max-w-[60ch]">
        The
        <x-ui.code>x-ui.textarea</x-ui.code>
        component is a wrapper around the
        <x-ui.code>textarea</x-ui.code>
        element that adds a variety of styles and functionality.
    </x-ui.p>

    {{-- Table --}}
    <div class="mt-6 rounded-lg border">
        <x-ui.table>
            <x-ui.table.thead>
                <x-ui.table.tr>
                    <x-ui.table.th>Prop</x-ui.table.th>
                    <x-ui.table.th>Type</x-ui.table.th>
                    <x-ui.table.th>Default</x-ui.table.th>
                </x-ui.table.tr>
            </x-ui.table.thead>
            <x-ui.table.tbody>
                <x-ui.table.tr>
                    <x-ui.table.td>size</x-ui.table.td>
                    <x-ui.table.td>"default" | "sm" | "lg"</x-ui.table.td>
                    <x-ui.table.td>"default"</x-ui.table.td>
                </x-ui.table.tr>
            </x-ui.table.tbody>
        </x-ui.table>
    </div>
</div>
