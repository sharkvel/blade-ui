@php
    use Illuminate\Support\Uri;
    $contentUri = Uri::route('components', 'button');

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

<x-slot:componentMeta :onThisPage="$onThisPage"></x-slot>

<x-article>
    {{-- Base --}}
    <x-article.heading>Button</x-article.heading>

    <x-article.subheading>Displays a button or a component that looks like a button</x-article.subheading>
    <br />
    <x-playground path="examples/components/button/hero.blade.php" />
    <br />
    {{-- Installation --}}
    <x-article.heading2>
        <a href="#installation" class="hash-link">Installation</a>
    </x-article.heading2>
    <div class="rounded-lg border p-1 pt-0">
        <div class="flex h-9 items-center px-4">
            <div class="flex items-center gap-2 text-muted-foreground">
                <i data-lucide="terminal" class="size-4"></i>
                <x-ui.label class="font-mono leading-none font-normal text-muted-foreground">Terminal</x-ui.label>
            </div>
        </div>
        <x-codelight language="shell">php artisan ui:add button</x-codelight>
    </div>
    <br />
    {{-- Usage --}}
    <x-article.heading2>
        <a href="#usage" class="hash-link">Usage</a>
    </x-article.heading2>
    <div class="rounded-lg border p-1">
        <x-codelight path="examples/components/button/usage.blade.php" />
    </div>
    <br />
    {{-- Reference --}}
    <x-article.heading2>
        <a href="#reference" class="hash-link">Reference</a>
    </x-article.heading2>

    <x-article.description>
        The
        <x-ui.code>x-ui.button</x-ui.code>
        component is a wrapper around the
        <x-ui.code>button</x-ui.code>
        element that adds a variety of styles and functionality.
    </x-article.description>
    {{-- Table --}}
    <div class="w-full rounded-lg border">
        <x-ui.table>
            <x-ui.table.header>
                <x-ui.table.row>
                    <x-ui.table.head>Prop</x-ui.table.head>

                    <x-ui.table.head>Type</x-ui.table.head>

                    <x-ui.table.head>Default</x-ui.table.head>
                </x-ui.table.row>
            </x-ui.table.header>

            <x-ui.table.body>
                <x-ui.table.row>
                    <x-ui.table.cell>variant</x-ui.table.cell>

                    <x-ui.table.cell>
                        "default" | "outline" | "ghost" | "destructive" | "secondary" | "link" | "simple"
                    </x-ui.table.cell>

                    <x-ui.table.cell>"default"</x-ui.table.cell>
                </x-ui.table.row>

                <x-ui.table.row>
                    <x-ui.table.cell>size</x-ui.table.cell>

                    <x-ui.table.cell>"default" | "sm" | "lg" | "icon-sm" | "icon" | "icon-lg"</x-ui.table.cell>

                    <x-ui.table.cell>"default"</x-ui.table.cell>
                </x-ui.table.row>
            </x-ui.table.body>
        </x-ui.table>
    </div>
</x-article>
