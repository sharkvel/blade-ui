@php
    use Illuminate\Support\Uri;
    $contentUri = Uri::route('docs.installation');

    $onThisPage = [
        [
            'url' => $contentUri->withFragment('create-project')->value(),
            'name' => 'Create project',
            'available_from' => '2026-01-20',
        ],
        [
            'url' => $contentUri->withFragment('add-tailwind-css')->value(),
            'name' => 'Add Tailwind CSS',
            'available_from' => '2026-01-20',
        ],
        [
            'url' => $contentUri->withFragment('add-alpinejs')->value(),
            'name' => 'Add AlpineJs',
            'available_from' => '2026-01-20',
        ],
        [
            'url' => $contentUri->withFragment('install-library')->value(),
            'name' => 'Install library',
            'available_from' => '2026-01-20',
        ],
        [
            'url' => $contentUri->withFragment('initialize')->value(),
            'name' => 'Initialize',
            'available_from' => '2026-01-20',
        ],
        [
            'url' => $contentUri->withFragment('add-component')->value(),
            'name' => 'Add component',
            'available_from' => '2026-01-20',
        ],
    ];
@endphp

<x-document-layout
    :sidebar-items="$sidebarItems"
    :previousPage="['url' => route('docs'), 'title' => 'Introduction']"
    :nextPage="['url' => route('docs.theming'), 'title' => 'Theming']"
>
    <x-slot name="componentMeta" :onThisPage="$onThisPage"></x-slot>
    <x-ui.h1 class="text-4xl font-medium">Installation</x-ui.h1>
    <x-ui.p class="mt-4 max-w-[55ch] text-muted-foreground">Install and configure library for Laravel</x-ui.p>

    {{-- Create project --}}
    <x-ui.h6 class="mt-12 max-w-fit font-medium">
        <a href="#create-project" class="hash-link">1. Create project</a>
    </x-ui.h6>
    <x-ui.p class="mt-2">
        Start by creating a new Laravel project with No-starter kit using the laravel installer laravel new my-app or visit the
        <x-ui.a href="https://laravel.com/docs">Laravel</x-ui.a>
        official site for creation guidance for new Laravel project:
    </x-ui.p>
    <div class="mt-6 rounded-lg border p-1">
        <x-ui.codelight language="shell">laravel new example-app</x-ui.codelight>
    </div>

    {{-- Install Tailwind CSS --}}
    <x-ui.h6 class="mt-12 max-w-fit font-medium">
        <a href="#add-tailwind-css" class="hash-link">2. Add Tailwind CSS</a>
    </x-ui.h6>
    <x-ui.p class="mt-2">
        By default laravel have built in integration of tailwind css. So you can skip this step. Checkout
        <x-ui.a href="https://tailwindcss.com/docs/installation">Tailwind CSS</x-ui.a>
        official site for more information:
    </x-ui.p>
    <div class="mt-6 rounded-lg border p-1">
        <!-- prettier-ignore -->
        <x-ui.codelight language="shell" >
            npm install tailwindcss @tailwindcss/vite
        </x-ui.codelight>
    </div>
    <x-ui.p>
        Add the
        <x-ui.code>
            @tailwindcss
            /vite
        </x-ui.code>
        plugin to your
        <x-ui.code>vite.config.js</x-ui.code>
        vite configuration file.
    </x-ui.p>
    <div class="mt-6 rounded-lg border p-1">
        <x-ui.codelight language="js" path="examples/others/tailwind-vite.config.js" />
    </div>
    <x-ui.p>
        Add an
        <x-ui.code>@import</x-ui.code>
        to your
        <x-ui.code>resources/css/app.css</x-ui.code>
        file that imports Tailwind CSS.
    </x-ui.p>
    <div class="mt-6 rounded-lg border p-1">
        <x-ui.codelight language="css">@import "tailwindcss";</x-ui.codelight>
    </div>

    {{-- Install Alpine JS --}}
    <x-ui.h6 class="mt-12 max-w-fit font-medium">
        <a href="#add-alpinejs" class="hash-link">3. Add AlpineJs</a>
    </x-ui.h6>
    <x-ui.p class="mt-2">
        Install alpine js for fantastic functionality with less javascript code. Visit
        <x-ui.a href="https://alpinejs.dev/">AlpineJs</x-ui.a>
        official site for more information:
    </x-ui.p>
    <div class="mt-6 rounded-lg border p-1">
        <x-ui.codelight language="shell">npm install alpinejs</x-ui.codelight>
    </div>
    <x-ui.p>
        Now import Alpine into your
        <x-ui.code>resources/js/bootstrap.js</x-ui.code>
        bundle and initialize it like so
    </x-ui.p>
    <div class="mt-6 rounded-lg border p-1">
        <x-ui.codelight language="js" path="examples/others/alpinejs-bootstrap.js" />
    </div>

    {{-- Install library --}}
    <x-ui.h6 class="mt-12 max-w-fit font-medium">
        <a href="#install-library" class="hash-link">4. Install library</a>
    </x-ui.h6>
    <x-ui.p class="mt-2">Add library using composer package manager to your project.</x-ui.p>
    <div class="mt-6 rounded-lg border p-1">
        <x-ui.codelight language="shell">composer require sharkvel/blade-ui</x-ui.codelight>
    </div>

    {{-- Initialize library --}}
    <x-ui.h6 class="mt-12 max-w-fit font-medium">
        <a href="#initialize" class="hash-link">5. Initialize</a>
    </x-ui.h6>
    <x-ui.p class="mt-2">Initialize library in your application. This check and install required files and configs.</x-ui.p>
    <div class="mt-6 rounded-lg border p-1">
        <x-ui.codelight language="shell">php artisan ui:init</x-ui.codelight>
    </div>

    {{-- Add component --}}
    <x-ui.h6 class="mt-12 max-w-fit font-medium">
        <a href="#add-component" class="hash-link">6. Add component</a>
    </x-ui.h6>
    <x-ui.p class="mt-2">
        You can add components after successfully initialize using
        <x-ui.code>php artisan ui:add {component}</x-ui.code>
    </x-ui.p>
    <div class="mt-6 rounded-lg border p-1">
        <x-ui.codelight language="shell">php artisan ui:add button</x-ui.codelight>
    </div>
    <x-ui.p>
        The command above will add the
        <x-ui.code>button</x-ui.code>
        component to
        <x-ui.code>app/View/Components/Ui/Button.php</x-ui.code>
        and
        <x-ui.code>resources/views/components/ui/button.blade.php</x-ui.code>
        . You can then use it like this:
    </x-ui.p>
    <div class="mt-6 rounded-lg border p-1">
        <x-ui.codelight path="examples/components/button/installed.blade.php" />
    </div>
</x-document-layout>
