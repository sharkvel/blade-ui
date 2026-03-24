<!DOCTYPE html>
<html
    lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    x-data
    :class="{ dark: $store.darkMode.on }"
    class="max-lg:has-[#mobile-sidebar-toggle:checked]:overflow-hidden"
>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="icon" type="image/png" href="/favicon.png" />
        <!-- Fonts -->
        {{-- <link rel="preload" fetchpriority="high" href="/fonts/Geist.woff2" crossorigin as="font" type="font/woff2" />
            <link rel="preload" fetchpriority="high" href="/fonts/GeistMono.woff2" crossorigin as="font" type="font/woff2" /> --}}
        @stack('css')
        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        {{-- Change favicon --}}
        <script>
            // Init dark mode preference
            (function () {
                const isDark =
                    localStorage.getItem('darkMode') || window.matchMedia('(prefers-color-scheme: dark)').matches;
                if (isDark === 'dark' || isDark === true) document.documentElement.classList.add('dark');
            })();

            // Change favicon on browser theme change
            const favicon = document.querySelector("link[rel='icon']");
            const changeFavicon = () => {
                const isDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
                favicon.setAttribute('href', isDark ? '/favicon.png' : '/favicon-dark.png');
            };
            changeFavicon();
            window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', changeFavicon);
        </script>
    </head>
    <body>
        <div class="min-h-screen">
            {{-- Page Content --}}
            <main>{{ $slot }}</main>
        </div>
        @env('local')
            {{-- Indicator --}}
            <x-view-size-indicator />
        @endenv

        {{-- Icons --}}
        <script src="https://unpkg.com/lucide@latest"></script>
        <script>
            lucide.createIcons({
                attrs: {
                    'stroke-width': 2,
                },
            });
        </script>
        @stack('js')
    </body>
</html>
