<x-document-layout :sidebar-items="$sidebarItems" :nextPage="['url' => route('docs.installation'), 'title' => 'Installation']">
    <x-ui.h1 class="text-4xl font-medium">Introduction</x-ui.h1>
    <x-ui.p class="mt-4 max-w-[55ch] text-muted-foreground">
        This is a set of beautiful and well crafted blade component open source library for Laravel.
    </x-ui.p>
    <x-ui.p>
        Every components are fully flexible, where you can install it, and also modify according to your test. It is fully styled with Tailwind CSS
        and functional with Alpine JS.
    </x-ui.p>
    <x-ui.p>This approach gives you full freedom to bland each component into your design.</x-ui.p>
    {{-- Key features --}}
    <x-ui.p>Key features of this library:</x-ui.p>
    <ul class="mt-6 ml-5 list-disc space-y-2 *:text-pretty">
        <li>
            <span class="font-medium">Open code:</span>
            Every component is open for modification.
        </li>
        <li>
            <span class="font-medium">Consistency:</span>
            Each component consistently follow the same design pattern to make it clean and modern.
        </li>
        <li>
            <span class="font-medium">Beautiful Defaults:</span>
            By default this library choose beautiful style, so you get great design out-of-the-box.
        </li>
        <li>
            <span class="font-medium">Well Structured:</span>
            All files, folders and code are well structured, so you will never lost.
        </li>
    </ul>
    {{-- Open code --}}
    <x-ui.h6 class="mt-12 font-medium">Open code</x-ui.h6>
    <x-ui.p class="mt-4">
        We give you a actual component code. You have full control to customize and extend the components to your needs. You see exactly how each
        component is built.
    </x-ui.p>
    {{-- Consistency --}}
    <x-ui.h6 class="mt-12 font-medium">Consistency</x-ui.h6>
    <x-ui.p class="mt-4">
        If
        <x-ui.code>button</x-ui.code>
        component height is 32px then
        <x-ui.code>input</x-ui.code>
        also have same. This feel all components like all are connected to each other.
    </x-ui.p>
    {{-- Beautiful default --}}
    <x-ui.h6 class="mt-12 font-medium">Beautiful Defaults</x-ui.h6>
    <x-ui.p class="mt-4">
        This library comes with a large collection of components that have carefully chosen default styles. They are designed to look good on their
        own and to work well together as a consistent system.
    </x-ui.p>
    {{-- Beautiful default --}}
    <x-ui.h6 class="mt-12 font-medium">Well Structured</x-ui.h6>
    <x-ui.p class="mt-4">
        Every component have there own
        <x-ui.code>app/View/Components/Ui/**.php</x-ui.code>
        and
        <x-ui.code>resources/views/components/ui/**.blade.php</x-ui.code>
        well structured file
    </x-ui.p>
</x-document-layout>
