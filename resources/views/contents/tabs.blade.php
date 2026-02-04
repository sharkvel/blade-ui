@php
    use Illuminate\Support\Uri;
    $contentUri = Uri::route("component", "tabs");

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
    <x-ui.h1 class="text-4xl font-medium">Tabs</x-ui.h1>
    <x-ui.p class="max-w-[55ch] text-muted-foreground mt-4">A set of layered sections of content—known as tab panels—that are displayed one at a time.</x-ui.p>
    <x-playground class="mt-12" example="examples.components.tabs.hero" />

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
        <x-ui.codelight language="shell">php artisan ui:add tabs</x-ui.codelight>
    </div>

    {{-- Usage --}}
    <x-ui.h6 class="mt-16 max-w-fit font-medium">
        <a href="#usage" class="hash-link">Usage</a>
    </x-ui.h6>
    <div class="mt-6 rounded-lg border p-1">
        <x-ui.codelight example="examples.components.tabs.usage" />
    </div>

    {{-- Reference --}}
    <x-ui.h6 class="mt-16 max-w-fit font-medium">
        <a href="#reference" class="hash-link">Reference</a>
    </x-ui.h6>
    <x-ui.p class="max-w-[60ch] mt-4">
        The
        <x-ui.code>x-ui.tabs.container</x-ui.code> and
        <x-ui.code>x-ui.tabs.trigger</x-ui.code>
        components have variety of styles and functionality.
    </x-ui.p>

    {{-- Table --}}
    <div class="mt-6 rounded-lg border w-full">
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
                    <x-ui.table.td>variant</x-ui.table.td>
                    <x-ui.table.td>"default" | "line"</x-ui.table.td>
                    <x-ui.table.td>"default"</x-ui.table.td>
                </x-ui.table.tr>
                <x-ui.table.tr>
                    <x-ui.table.td>size</x-ui.table.td>
                    <x-ui.table.td>"default" | "sm" | "lg" | "icon-sm" | "icon" | "icon-lg"</x-ui.table.td>
                    <x-ui.table.td>"default"</x-ui.table.td>
                </x-ui.table.tr>
            </x-ui.table.tbody>
        </x-ui.table>
    </div>
</div>
