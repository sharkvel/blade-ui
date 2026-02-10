@php
    $baseClasses = "relative grid rounded-md border border-input bg-neutral-900 dark:bg-input/30";
@endphp

<div
    {{ $attributes->merge(["class" => cn($baseClasses, $attributes->get("class"))]) }}
    x-data="{
        isCopied: false,
        async copy(text) {
            try {
                await navigator.clipboard.writeText(text)
                if (! this.isCopied) setTimeout(() => (this.isCopied = false), 2000)
                this.isCopied = true
            } catch (error) {
                console.error(error)
            }
        },
    }"
>
    <button
        class="group absolute top-0 right-0 mt-3.5 mr-4 grid size-6 cursor-pointer place-content-center rounded-sm bg-neutral-900"
        @click="copy($el.nextElementSibling.value)"
    >
        <i data-lucide="copy" class="size-4 text-white/50 group-hover:text-white" x-show="!isCopied"></i>
        <i data-lucide="check" class="size-4 text-white/50 group-hover:text-white" x-cloak x-show="isCopied"></i>
    </button>
    <input type="hidden" value="{{ $highlight->code }}" />
    <pre class="grid overflow-x-auto [scrollbar-width:none]">
        <code
        data-theme="{{ $highlight->attrs["data-theme"] }}"
        data-lang="{{ $highlight->attrs["data-lang"] }}"
        @class(cn($highlight->classes, "bg-transparent! text-sm [&_.line-highlight]:bg-neutral-800/80! [&.torchlight_.line]:px-4 [&.torchlight_.line-number]:mr-4 [.torchlight]:flex [.torchlight]:min-w-max [.torchlight]:flex-col [.torchlight]:py-4"))
        style="{{ $highlight->styles }}"
        >
        {!! $highlight->highlighted !!}
    </code>
    </pre>
</div>
