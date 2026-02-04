<aside class="hide-scrollbar sticky top-16 hidden h-[calc(100svh-4rem)] w-3xs flex-col gap-10 overflow-auto py-12 xl:flex" x-data='fragment'>
    @if (! empty($onThisPage))
        <div class="flex flex-col gap-2">
            <small class="text-muted-foreground">On this page</small>
            <ul class="mt-2 flex flex-col gap-1 border-l">
                @foreach ($onThisPage as $menu)
                    @if ($menu["available_from"])
                        @php
                            $menuFragment = "#" . Uri::of($menu["url"])->fragment();
                        @endphp

                        <a href="{{ $menu["url"] }}">
                            <li
                                class="menu-item flex h-6 items-center pl-2 text-[0.8rem] font-normal text-muted-foreground hover:text-foreground data-[active='true']:font-medium data-[active='true']:text-foreground md:pl-8"
                                data-active="{{ request()->url() === $menu["url"] ? "true" : "false" }}"
                                data-available="{{ $menu["available_from"] ? "true" : "false" }}"
                                x-bind:data-active="fragment == '{{ $menuFragment }}' ? 'true' : 'false'"
                                @click="window.scrollTo(0,document.querySelector(`a[href='{{ $menuFragment }}']`).offsetTop - 64 - 48)"
                            >
                                {{ $menu["name"] }}
                            </li>
                        </a>
                    @else
                        <li class="flex h-6 items-center gap-2 pl-2 text-[0.8rem] font-normal text-muted-foreground md:pl-8">
                            {{ $menu["name"] }}
                            <span class="flex items-center rounded-xs bg-muted px-0.5 py-0.5 text-xs leading-none text-muted-foreground">soon</span>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    @endif
</aside>
