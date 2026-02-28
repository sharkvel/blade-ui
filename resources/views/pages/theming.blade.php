@php
    use Illuminate\Support\Uri;
    $contentUri = Uri::route('docs.theming');

    $onThisPage = [
        [
            'url' => $contentUri->withFragment('css-variables')->value(),
            'name' => 'CSS Variables',
            'available_from' => '2026-01-20',
        ],
        [
            'url' => $contentUri->withFragment('utility-classes')->value(),
            'name' => 'Utility classes',
            'available_from' => '2026-01-20',
        ],
        [
            'url' => $contentUri->withFragment('list-of-variables')->value(),
            'name' => 'List of variables',
            'available_from' => '2026-01-20',
        ],
        [
            'url' => $contentUri->withFragment('adding-new-colors')->value(),
            'name' => 'Adding new colors',
            'available_from' => '2026-01-20',
        ],
    ];
@endphp

<x-document-layout :sidebar-items="$sidebarItems" :previousPage="['url' => route('docs.installation'), 'title' => 'Installation']" :nextPage="['url' => route('component'), 'title' => 'Components']">
    <x-slot name="componentMeta" :onThisPage="$onThisPage"></x-slot>
    <x-ui.h1 class="text-4xl font-medium">Theming</x-ui.h1>
    <x-ui.p class="mt-4 max-w-[55ch] text-muted-foreground">
        Using CSS Variables and color utilities for theming.
    </x-ui.p>

    <x-ui.p>You can choose between using CSS variables (recommended) or utility classes for theming.</x-ui.p>

    {{-- CSS Variables --}}
    <x-ui.h6 class="mt-12 font-medium">
        <a href="#css-variables" class="hash-link">CSS Variables</a>
    </x-ui.h6>
    <x-ui.p class="mt-2">
        We provide many custom css variables out of the box, like
        <x-ui.code>--background</x-ui.code>
        ,
        <x-ui.code>--primary</x-ui.code>
        , and many more.
    </x-ui.p>
    <div class="mt-6 rounded-lg border p-1">
        <x-codelight>
            @verbatim<div class='bg-background text-foreground'></div>@endverbatim

        </x-codelight>
    </div>

    {{-- Utility classes --}}
    <x-ui.h6 class="mt-12 font-medium">
        <a href="#utility-classes" class="hash-link">Utility classes</a>
    </x-ui.h6>
    <x-ui.p class="mt-2">Tailwind CSS pre-build utility classes</x-ui.p>
    <div class="mt-6 rounded-lg border p-1">
        <x-codelight>
            @verbatim<div class='bg-zinc-950 dark:bg-white'></div>@endverbatim

        </x-codelight>
    </div>

    {{-- List of variables --}}
    <x-ui.h6 class="mt-12 font-medium">
        <a href="#list-of-variables" class="hash-link">List of variables</a>
    </x-ui.h6>
    <x-ui.p class="mt-2">Here's the list of variables available for customization:</x-ui.p>
    <div class="mt-6 rounded-lg border p-1">
        <x-codelight language="css" path="examples/others/list-of-variables.css" />
    </div>

    {{-- Add new custom variables --}}
    <x-ui.h6 class="mt-12 font-medium">
        <a href="#adding-new-colors" class="hash-link">Adding new colors</a>

    </x-ui.h6>
    <x-ui.p class="mt-2">
        To add new colors, you need to add them to your CSS file under the
        <x-ui.code>:root</x-ui.code>
        and
        <x-ui.code>dark</x-ui.code>
        pseudo-classes. Then, use the
        <x-ui.code>
            @theme
            inline
        </x-ui.code>
        directive to make the colors available as CSS variables.
    </x-ui.p>
    <div class="mt-6 rounded-lg border p-1">
        <x-codelight language="css" path="examples/others/add-custom-variables.css" />
    </div>
    <x-ui.p>
        You can now use the
        <x-ui.code>warning</x-ui.code>
        utility class in your components.
    </x-ui.p>
    <div class="mt-6 rounded-lg border p-1">
        <x-codelight>
            @verbatim<div class='bg-warning text-warning-foreground'></div>@endverbatim

        </x-codelight>
    </div>
</x-document-layout>