<aside
    class="hide-scrollbar sticky top-16 hidden h-[calc(100svh-4rem)] w-3xs flex-col gap-10 overflow-auto overscroll-contain py-12 lg:flex"
    id="sidebar"
>
    @foreach ($sidebarItems as $section => $items)
        @continue(in_array($section, ["Menus"]))
        <div class="flex flex-col gap-2">
            <small class="pl-4 text-muted-foreground md:pl-12">{{ $section }}</small>
            <ul class="flex flex-col">
                @foreach ($items as $menu)
                    @if ($menu["available_from"])
                        <a href="{{ $menu["url"] }}">
                            <li
                                class="menu-item flex h-8 items-center gap-2 pl-4 text-[0.825rem] font-normal data-[active='true']:font-medium md:pl-12"
                                data-active="{{ request()->url() === $menu["url"] ? "true" : "false" }}"
                                data-available="{{ $menu["available_from"] ? "true" : "false" }}"
                            >
                                {{ $menu["name"] }}
                            </li>
                        </a>
                    @else
                        <li class="flex h-8 items-center gap-2 pl-4 text-[0.825rem] font-normal opacity-50 md:pl-12">
                            {{ $menu["name"] }}
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    @endforeach
</aside>

@push("js")
    <script>
        // Init
        const sidebar = document.querySelector(`#sidebar`);
        const previousURL = new URL(document.referrer);
        const scroll = localStorage.getItem('sidebar-scroll') ?? 0;

        // Scroll to on specific condition
        if (previousURL.pathname.includes('/docs') && scroll) {
            sidebar.scrollTo(0, scroll);
        } else {
            localStorage.removeItem('sidebar-scroll');
        }

        // Event
        sidebar.addEventListener('scroll', function () {
            // Store current scroll state
            localStorage.setItem('sidebar-scroll', this.scrollTop);
        });
    </script>
@endpush
