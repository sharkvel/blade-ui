<x-ui.example-area title="Checkbox">
    <div class="space-y-6">
        <div class="flex items-center gap-3">
            <x-ui.checkbox size="lg" id="c_lg" />
            <x-ui.label for="c_lg">Large</x-ui.label>
        </div>
        <div class="flex items-center gap-3">
            <x-ui.checkbox id="c_default" />
            <x-ui.label for="c_default">Default</x-ui.label>
        </div>
        <div class="flex items-center gap-3">
            <x-ui.checkbox size="sm" id="c_sm" />
            <x-ui.label for="c_sm">Small</x-ui.label>
        </div>

        <div class="flex items-center gap-3">
            <x-ui.checkbox variant="secondary" id="c_secondary" />
            <x-ui.label for="c_secondary">Secondary</x-ui.label>
        </div>
        <div class="flex items-center gap-3">
            <x-ui.checkbox variant="outline" id="c_outline" />
            <x-ui.label for="c_outline">Outline</x-ui.label>
        </div>
        <div class="flex items-center gap-3">
            <x-ui.checkbox variant="ghost" id="c_ghost" />
            <x-ui.label for="c_ghost">Ghost</x-ui.label>
        </div>
    </div>
</x-ui.example-area>
