<x-document-layout :sidebar-items="$sidebarItems">
    @if (filled($componentName))
        @include("contents.{$componentName}")
    @else
        @php
            $components = [];
        @endphp

        <x-ui.h1 class="text-4xl font-medium">Components</x-ui.h1>
        <x-ui.p class="max-w-[55ch] text-muted-foreground mt-4">
            Here you can find all the components available in the library. We are working on adding more components.
        </x-ui.p>
    @endif
</x-document-layout>
