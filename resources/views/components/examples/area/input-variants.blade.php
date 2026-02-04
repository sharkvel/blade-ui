<x-ui.example-area title="Inputs">
    {{-- Primary --}}
    <div class="space-y-6">
        <x-ui.input size="lg" placeholder="Large" />
        <x-ui.input placeholder="Default" />
        <x-ui.input size="sm" placeholder="Small" />
        <x-ui.input type="file" placeholder="Default" />
        <x-ui.input type="color" placeholder="Default" list="pre-colors" />
        <x-ui.input type="date" placeholder="Default" />
        <x-ui.input type="time" placeholder="Default" />
        <x-ui.input type="number" placeholder="0" />
        <x-ui.input type="search" placeholder="Search" />
        <x-ui.textarea placeholder="Large" size="lg"></x-ui.textarea>
        <x-ui.textarea placeholder="Default"></x-ui.textarea>
        <x-ui.textarea placeholder="Small" size="sm"></x-ui.textarea>
    </div>

    {{-- Data list of colors --}}
    <datalist id="pre-colors">
        <option value="#001219"></option>
        <option value="#005f73"></option>
        <option value="#0a9396"></option>
        <option value="#94d2bd"></option>
        <option value="#e9d8a6"></option>
        <option value="#ee9b00"></option>
        <option value="#ca6702"></option>
        <option value="#bb3e03"></option>
        <option value="#ae2012"></option>
        <option value="#9b2226"></option>
    </datalist>
</x-ui.example-area>
