<x-ui.example-area title="Radio">
    <div class="space-y-6">
        <div class="flex items-center gap-3">
            <x-ui.radio size="lg" id="r_lg" value="large" />
            <x-ui.label for="r_lg">Large</x-ui.label>
        </div>
        <div class="flex items-center gap-3">
            <x-ui.radio id="r_default" value="default" />
            <x-ui.label for="r_default">Default</x-ui.label>
        </div>
        <div class="flex items-center gap-3">
            <x-ui.radio size="sm" id="r_sm" value="small" />
            <x-ui.label for="r_sm">Small</x-ui.label>
        </div>

        <div class="flex items-center gap-3">
            <x-ui.radio variant="secondary" id="r_secondary" value="large" />
            <x-ui.label for="r_secondary">Secondary</x-ui.label>
        </div>
        <div class="flex items-center gap-3">
            <x-ui.radio variant="outline" id="r_outline" value="large" />
            <x-ui.label for="r_outline">Outline</x-ui.label>
        </div>
        <div class="flex items-center gap-3">
            <x-ui.radio variant="ghost" id="r_ghost" value="large" />
            <x-ui.label for="r_ghost">Ghost</x-ui.label>
        </div>
    </div>
</x-ui.example-area>
