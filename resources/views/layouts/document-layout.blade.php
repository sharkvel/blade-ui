@php
    $onThisPage = $componentMeta->attributes["onThisPage"] ?? [];
@endphp

<x-app-layout>
    {{-- Nav bar --}}
    <x-nav-bar :sidebar-items="$sidebarItems" />
    <div class="h-16"></div>
    <div class="section-wrapper mx-auto flex min-h-[calc(100svh-4rem)] w-full border-x-0 px-0 md:border-x">
        {{-- Sidebar --}}
        <x-sidebar :sidebar-items="$sidebarItems" />
        {{-- Content --}}
        <div class="section-wrapper grow py-12">
            <div class="mx-auto flex min-h-full max-w-3xl flex-col">
                {{ $slot }}
                @if (filled($nextPage) || filled($previousPage))
                    {{-- Next/Previous page footer --}}
                    <div class="mt-auto flex pt-12">
                        @if (filled($previousPage))
                            <a href="{{ $previousPage["url"] }}">
                                <x-ui.button variant="secondary" size="sm" class="cursor-pointer">
                                    <i data-lucide="arrow-left"></i>
                                    {{ $previousPage["title"] }}
                                </x-ui.button>
                            </a>
                        @endif

                        @if (filled($nextPage))
                            <a href="{{ $nextPage["url"] }}" class="ml-auto">
                                <x-ui.button variant="secondary" size="sm" class="cursor-pointer">
                                    {{ $nextPage["title"] }}
                                    <i data-lucide="arrow-right"></i>
                                </x-ui.button>
                            </a>
                        @endif
                    </div>
                @endif
            </div>
        </div>
        {{-- On this page sidebar --}}
        <x-on-this-page-sidebar :on-this-page="$onThisPage" />
    </div>
</x-app-layout>
