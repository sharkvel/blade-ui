<x-document-layout
    :sidebar-items="$sidebarItems"
    :previousPage="['url' => route('docs'), 'title' => 'Introduction']"
    :nextPage="['url' => route('docs.installation'), 'title' => 'Installation']"
>
    <x-ui.h1 class="text-4xl font-medium">Installation</x-ui.h1>
    <x-ui.p class="mt-4 max-w-[55ch] text-muted-foreground">Install and configure library for Laravel</x-ui.p>
    {{-- Create project --}}
    <x-ui.h6 class="mt-12 font-medium">1. Create project</x-ui.h6>
    <x-ui.p class="mt-2">
        Start by creating a new Laravel project with No-starter kit using the laravel installer laravel new my-app or visit the
        <x-ui.a href="https://laravel.com/docs">Laravel</x-ui.a>
        official site for creation guidance for new Laravel project:
    </x-ui.p>
    <div class="mt-6 rounded-lg border p-1">
        <x-ui.codelight language="shell">laravel new example-app</x-ui.codelight>
    </div>

    {{-- Install library --}}
    <x-ui.h6 class="mt-12 font-medium">2. Install library</x-ui.h6>
    <x-ui.p class="mt-2">Add library using composer package manager to your project.</x-ui.p>
    <div class="mt-6 rounded-lg border p-1">
        <x-ui.codelight language="shell">composer require jaypalsapara/blade-ui</x-ui.codelight>
    </div>

    {{-- Initialize library --}}
    <x-ui.h6 class="mt-12 font-medium">3. Initialize</x-ui.h6>
    <x-ui.p class="mt-2">Initialize library in your application. This check and install required files and configs.</x-ui.p>
    <div class="mt-6 rounded-lg border p-1">
        <x-ui.codelight language="shell">php artisan ui:init</x-ui.codelight>
    </div>

    {{-- Add component --}}
    <x-ui.h6 class="mt-12 font-medium">4. Add component</x-ui.h6>
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
        <x-ui.code>resources/views/components/ui/button.blade.php</x-ui.code>. You can then use it like this:
    </x-ui.p>
    <div class="mt-6 rounded-lg border p-1">
        <x-ui.codelight example='examples.components.button.installed' />
    </div>
</x-document-layout>
