<div class="grid min-h-screen w-full overflow-hidden md:grid-cols-2">
    {{-- Left --}}
    <div class="hidden flex-col bg-primary/5 p-8 text-primary md:flex dark:border-r">
        <div class="flex items-center gap-2">
            <i data-lucide="command"></i>
            <x-ui.h6 class="font-medium">Acme Inc</x-ui.h6>
        </div>
        <div class="mt-auto">
            <x-ui.p class="text-start">
                <q>
                    This library has significantly reduced my development time and enabled me to deliver high-quality designs to clients more
                    efficiently.
                </q>
                - Jaypal Sapara
            </x-ui.p>
        </div>
    </div>
    {{-- Right --}}
    <div class="relative flex flex-col justify-center p-8">
        <x-ui.button class="absolute top-0 right-0 mt-8 mr-8" variant="ghost">Login</x-ui.button>
        <div class="mx-auto max-w-87.5">
            <x-ui.h4 class="text-center font-medium tracking-tight">Create an account</x-ui.h4>
            <p class="mt-2 text-center text-sm text-muted-foreground">Enter your email below to create your account</p>
            <div class="mt-6 grid gap-6">
                <x-ui.input type="email" placeholder="name@example.com" />
                <x-ui.button>Sign In with Email</x-ui.button>
            </div>
            <div class="relative">
                <x-ui.separator class="my-6.5" />
                <span class="absolute top-1/2 left-1/2 -translate-1/2 bg-background px-2 text-center text-sm leading-none text-muted-foreground">
                    Or continue with
                </span>
            </div>
            <div class="grid gap-6">
                <x-ui.button variant="outline">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="currentColor">
                        <path
                            d="M16,2.345c7.735,0,14,6.265,14,14-.002,6.015-3.839,11.359-9.537,13.282-.7,.14-.963-.298-.963-.665,0-.473,.018-1.978,.018-3.85,0-1.312-.437-2.152-.945-2.59,3.115-.35,6.388-1.54,6.388-6.912,0-1.54-.543-2.783-1.435-3.762,.14-.35,.63-1.785-.14-3.71,0,0-1.173-.385-3.85,1.435-1.12-.315-2.31-.472-3.5-.472s-2.38,.157-3.5,.472c-2.677-1.802-3.85-1.435-3.85-1.435-.77,1.925-.28,3.36-.14,3.71-.892,.98-1.435,2.24-1.435,3.762,0,5.355,3.255,6.563,6.37,6.913-.403,.35-.77,.963-.893,1.872-.805,.368-2.818,.963-4.077-1.155-.263-.42-1.05-1.452-2.152-1.435-1.173,.018-.472,.665,.017,.927,.595,.332,1.277,1.575,1.435,1.978,.28,.787,1.19,2.293,4.707,1.645,0,1.173,.018,2.275,.018,2.607,0,.368-.263,.787-.963,.665-5.719-1.904-9.576-7.255-9.573-13.283,0-7.735,6.265-14,14-14Z"
                        ></path>
                    </svg>
                    GitHub
                </x-ui.button>
                <p class="text-center text-sm text-pretty text-muted-foreground">
                    By clicking continue, you agree to our
                    <x-ui.a class="text-sm font-normal text-inherit">Terms of Service</x-ui.a>
                    and
                    <x-ui.a class="text-sm font-normal text-inherit">Privacy Policy</x-ui.a>
                    .
                </p>
            </div>
        </div>
    </div>
</div>
