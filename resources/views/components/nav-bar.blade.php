@props(['sidebarItems' => []])
<nav class="sticky top-0 left-0 z-999 flex h-16 w-full items-center border-b bg-background">
    <div class="section-wrapper mx-auto flex w-full items-center gap-6">
        <div class="flex items-center gap-2">
            <label for="mobile-sidebar-toggle" class="lg:hidden">
                <div class="grid size-9 place-content-center">
                    <i data-lucide="menu" class="size-4"></i>
                </div>
            </label>
            {{-- Logo --}}
            <a href="{{ route('home') }}">
                <x-ui.button variant="ghost" size="icon-lg" class="cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 258.66" fill="currentColor" class="size-7 fill-foreground">
                        <path
                            class="cls-1"
                            d="M192,110.86V36.95L128,0l-64,36.95v73.91L0,147.81v73.9l64,36.95,64-36.95,64,36.95,64-36.95v-73.9l-64-36.95ZM20,147.81l44-25.41,44,25.41-44,25.4-44-25.4ZM118,215.93l-44,25.41v-50.81l44-25.4v50.8ZM84,36.95l44-25.4,44,25.4-44,25.41-44-25.41ZM138,79.68l44-25.41v50.81l-44,25.41v-50.81ZM148,147.81l44-25.41,44,25.41-44,25.4-44-25.4ZM246,215.93l-44,25.41v-50.81l44-25.4v50.8Z"
                        />
                    </svg>
                </x-ui.button>
            </a>
        </div>

        {{-- Nav items --}}
        <ul class="hidden gap-6 text-[0.93rem] lg:flex">
            @foreach ($sidebarItems['Menus'] as $menu)
                <li>
                    <x-ui.a href="{{ $menu['url'] }}" class="no-underline">
                        {{ $menu['name'] }}
                    </x-ui.a>
                </li>
            @endforeach
        </ul>
        <div class="ml-auto flex items-center">
            <x-ui.button variant="outline" class="hidden pr-1.5 text-muted-foreground shadow-none lg:flex">
                <i data-lucide="search" data-icon="inline-start"></i>
                Search docs
                <x-ui.kbd variant="secondary" size="sm" class="ms-2">
                    <i data-lucide="command" class="size-3"></i>
                    K
                </x-ui.kbd>
            </x-ui.button>
            <x-ui.separator orientation="vertical" class="mx-4 mr-2 hidden h-4 lg:block" />
            <x-ui.button variant="ghost" size="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="currentColor">
                    <path
                        d="M16,2.345c7.735,0,14,6.265,14,14-.002,6.015-3.839,11.359-9.537,13.282-.7,.14-.963-.298-.963-.665,0-.473,.018-1.978,.018-3.85,0-1.312-.437-2.152-.945-2.59,3.115-.35,6.388-1.54,6.388-6.912,0-1.54-.543-2.783-1.435-3.762,.14-.35,.63-1.785-.14-3.71,0,0-1.173-.385-3.85,1.435-1.12-.315-2.31-.472-3.5-.472s-2.38,.157-3.5,.472c-2.677-1.802-3.85-1.435-3.85-1.435-.77,1.925-.28,3.36-.14,3.71-.892,.98-1.435,2.24-1.435,3.762,0,5.355,3.255,6.563,6.37,6.913-.403,.35-.77,.963-.893,1.872-.805,.368-2.818,.963-4.077-1.155-.263-.42-1.05-1.452-2.152-1.435-1.173,.018-.472,.665,.017,.927,.595,.332,1.277,1.575,1.435,1.978,.28,.787,1.19,2.293,4.707,1.645,0,1.173,.018,2.275,.018,2.607,0,.368-.263,.787-.963,.665-5.719-1.904-9.576-7.255-9.573-13.283,0-7.735,6.265-14,14-14Z"
                    ></path>
                </svg>
            </x-ui.button>
            <x-ui.separator orientation="vertical" class="mx-2 h-4" />
            <x-ui.button id="appearanceToggle" size="icon" variant="ghost" @click="$store.darkMode.toggle()">
                <i data-lucide="contrast"></i>
            </x-ui.button>
            <x-ui.separator orientation="vertical" class="mx-4 ml-2 h-4" />
            <x-ui.button>Get Started</x-ui.button>
        </div>
    </div>
</nav>

{{-- Mobile Sidebar --}}
<input type="checkbox" id="mobile-sidebar-toggle" class="checked:[&+aside]:flex" hidden />
<aside
    class="hide-scrollbar fixed top-16 left-0 z-50 hidden h-[calc(100svh-4rem)] w-full flex-col gap-10 overflow-auto bg-background py-12 lg:hidden!"
>
    @foreach ($sidebarItems as $section => $items)
        @php
            $allowSidebarFeatures = ! in_array($section, ['Menus']);
        @endphp

        <div class="flex flex-col gap-2">
            <small class="pl-4 text-muted-foreground md:pl-12">{{ $section }}</small>
            <ul class="flex flex-col">
                @foreach ($items as $menu)
                    @if ($menu['available_from'])
                        <a href="{{ $menu['url'] }}">
                            <li
                                class="menu-item flex h-10 items-center gap-2 pl-4 text-base font-normal data-[active='true']:font-medium md:pl-12 lg:h-8 lg:text-[0.825rem]"
                                data-active="{{ request()->url() === $menu['url'] && $allowSidebarFeatures ? 'true' : 'false' }}"
                                data-available="{{ $menu['available_from'] ? 'true' : 'false' }}"
                            >
                                {{ $menu['name'] }}
                            </li>
                        </a>
                    @else
                        <li class="flex h-10 items-center gap-2 pl-4 text-base font-normal text-muted-foreground md:pl-12 lg:h-8 lg:text-[0.825rem]">
                            {{ $menu['name'] }}
                            <span class="flex items-center rounded-xs bg-muted px-0.5 py-0.5 text-xs leading-none text-muted-foreground">soon</span>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    @endforeach
</aside>
