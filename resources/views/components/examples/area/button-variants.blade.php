<x-ui.example-area title="Buttons">
    {{-- Primary --}}
    <div>
        <x-ui.button size="lg">Large</x-ui.button>
        <x-ui.button>Default</x-ui.button>
        <x-ui.button size="sm">Small</x-ui.button>
        <x-ui.button size="xs">Extra Small</x-ui.button>
    </div>
    {{-- Primary --}}
    <div>
        <x-ui.button size="lg">
            <i data-lucide="globe"></i>
            Default
        </x-ui.button>
        <x-ui.button>
            <i data-lucide="globe"></i>
            Default
        </x-ui.button>
        <x-ui.button size="sm">
            <i data-lucide="globe"></i>
            Default
        </x-ui.button>
        <x-ui.button size="xs">
            <i data-lucide="globe"></i>
            Default
        </x-ui.button>
    </div>
    {{-- Inline --}}
    <div>
        <x-ui.button size="lg">
            {{-- <span class="size-10 border border-red-500 absolute left-0"></span> --}}
            <i data-lucide="globe" data-icon="inline-start"></i>
            Default
        </x-ui.button>
        <x-ui.button>
            {{-- <span class="size-9 border border-red-500 absolute left-0"></span> --}}
            <i data-lucide="globe" data-icon="inline-start"></i>
            Default
        </x-ui.button>
        <x-ui.button size="sm">
            {{-- <span class="size-8 border border-red-500 absolute left-0"></span> --}}
            <i data-lucide="globe" data-icon="inline-start"></i>
            Default
        </x-ui.button>
        <x-ui.button size="xs">
            {{-- <span class="size-7 border border-red-500 absolute left-0"></span> --}}
            <i data-lucide="globe" data-icon="inline-start"></i>
            Default
        </x-ui.button>
    </div>
    {{-- Outline --}}
    <div>
        <x-ui.button size="lg" variant="outline">
            <i data-lucide="globe"></i>
            Outline
        </x-ui.button>
        <x-ui.button variant="outline">
            <i data-lucide="globe"></i>
            Outline
        </x-ui.button>
        <x-ui.button size="sm" variant="outline">
            <i data-lucide="globe"></i>
            Outline
        </x-ui.button>
    </div>
    {{-- Secondary --}}
    <div>
        <x-ui.button size="lg" variant="secondary">
            <i data-lucide="globe"></i>
            Secondary
        </x-ui.button>
        <x-ui.button variant="secondary">
            <i data-lucide="globe"></i>
            Secondary
        </x-ui.button>
        <x-ui.button size="sm" variant="secondary">
            <i data-lucide="globe"></i>
            Secondary
        </x-ui.button>
    </div>
    {{-- Ghost --}}
    <div>
        <x-ui.button size="lg" variant="ghost">
            <i data-lucide="globe"></i>
            Ghost
        </x-ui.button>
        <x-ui.button variant="ghost">
            <i data-lucide="globe"></i>
            Ghost
        </x-ui.button>
        <x-ui.button size="sm" variant="ghost">
            <i data-lucide="globe"></i>
            Ghost
        </x-ui.button>
    </div>
    {{-- Destructive --}}
    <div>
        <x-ui.button size="lg" variant="destructive">
            <i data-lucide="globe"></i>
            Destructive
        </x-ui.button>
        <x-ui.button variant="destructive">
            <i data-lucide="globe"></i>
            Destructive
        </x-ui.button>
        <x-ui.button size="sm" variant="destructive">
            <i data-lucide="globe"></i>
            Destructive
        </x-ui.button>
    </div>
    {{-- Links --}}
    <div>
        <x-ui.button size="lg" variant="link">Link</x-ui.button>
        <x-ui.button variant="link">Link</x-ui.button>
        <x-ui.button size="sm" variant="link">Link</x-ui.button>
    </div>

    {{-- Icons --}}
    <div>
        <x-ui.button size="lg" variant="outline" size="icon-lg">
            <i data-lucide="globe"></i>
        </x-ui.button>
        <x-ui.button variant="outline" size="icon">
            <i data-lucide="globe"></i>
        </x-ui.button>
        <x-ui.button size="sm" variant="outline" size="icon-sm">
            <i data-lucide="globe"></i>
        </x-ui.button>
    </div>
</x-ui.example-area>
