<x-document-layout :nextPage="['url' => route('components', 'button'), 'title' => 'Button']">
    @if(isset($name) && filled($name))
        @include("contents.$name")
    @else
        <x-ui.h1 class="text-4xl font-medium">Components</x-ui.h1>

        <x-ui.p class="mt-4 max-w-[55ch] text-muted-foreground">
            Here you can find all the components available in the library. We are working on adding more components.
        </x-ui.p>
        <div class="mt-4 grid grid-cols-3 gap-4 md:gap-x-12">
            @foreach($sidebarItems['Components'] as $compo)
                @if($compo['available_from'])
                    <a class="w-fit" href="{{ $compo['url'] }}">
                        <x-ui.button class="cursor-pointer justify-start px-0 text-base" variant="link">
                            {{ $compo['name'] }}
                        </x-ui.button>
                    </a>
                @else
                    <x-ui.button class="cursor-pointer justify-start px-0 text-base" disabled variant="link">
                        {{ $compo['name'] }}
                    </x-ui.button>
                @endif
            @endforeach
        </div>
    @endif
</x-document-layout>
