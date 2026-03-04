@php
    $baseClasses = 'flex size-full flex-col overflow-hidden rounded-md bg-popover p-1 text-popover-foreground';
@endphp

<div
    x-data="{
        query: '',
        selected: 0,
        items: [],
        visible: open !== undefined ? open : true,
        init() {
            $watch('query', (value) => {
                if (this.items.length > 0) {
                    if (value.trim().length > 0) {
                        this.items.forEach((item) => {
                            ! item.dataset.commandValue.includes(value.trim())
                                ? item.setAttribute('hidden', true)
                                : item.removeAttribute('hidden')
                        })
                    } else {
                        this.items.forEach((item) => item.removeAttribute('hidden'))
                    }
                    this.selected = 0
                    this.updateSelected()
                }
            })
            this.updateItems()
            if (this.items.length > 0) {
                this.updateSelected()
            }
        },
        updateItems() {
            this.items = [...$el.querySelectorAll(`[data-slot='command-item']`)]
        },
        updateSelected() {
            this.items.map((item) => item.removeAttribute('data-selected'))
            const item = this.items[this.selected]
            item.dataset.selected = true
        },
        onKey(e) {
            const itemsLength = this.items.length
            if (e.key === 'ArrowDown') {
                e.preventDefault()
                this.selected = (this.selected + 1) % itemsLength
                this.updateSelected()
            } else if (e.key === 'ArrowUp') {
                e.preventDefault()
                this.selected = (this.selected - 1 + itemsLength) % itemsLength
                this.updateSelected()
            }
        },
    }"
    x-init="$watch('open', (value) => (visible = open))"
    data-slot="command"
    {{
        $attributes->merge([
            'class' => cn($baseClasses, $attributes->get('class')),
        ])
    }}
    @keydown.window="visible && onKey($event)"
    tabindex="-1"
>
    {{ $slot }}
</div>
