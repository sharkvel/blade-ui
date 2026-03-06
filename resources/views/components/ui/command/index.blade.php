@php
    $baseClasses = 'flex size-full flex-col overflow-hidden rounded-md bg-popover p-1 text-popover-foreground outline-none';
@endphp

<div
    x-data="{
        query: '',
        selected: 0,
        items: [],
        visible: open !== undefined ? open : true,
        init() {
            this.updateItems()
            if (this.items.length) this.updateSelected()
            $watch('query', () => this.filterItems())
        },

        filterItems() {
            const q = this.query.trim()
            const all = [...$el.querySelectorAll(`[data-slot='command-item']`)]

            this.items = q
                ? all.filter((item) => {
                      const match = item.textContent?.match(new RegExp(q, 'i'))
                      item.toggleAttribute('hidden', ! match)
                      return match
                  })
                : all.forEach((item) => {
                      item.removeAttribute('hidden')
                      item.removeAttribute('data-selected')
                  }) || all

            this.selected = 0
            this.updateSelected()
        },

        updateItems() {
            this.items = [...$el.querySelectorAll(`[data-slot='command-item']`)]
        },

        updateSelected() {
            this.items.forEach((item) => item.removeAttribute('data-selected'))
            const item = this.items[this.selected]
            if (item) {
                item.dataset.selected = true
                if (this.selected === 0) {
                    $el.querySelector(`[data-slot='command-list']`).scrollTo({
                        top: 0,
                        behavior: 'instant',
                    })
                } else {
                    item.scrollIntoView({ block: 'nearest', behavior: 'instant' })
                }
            }
        },

        onKey(e) {
            if (e.key === 'Enter') {
                const selectedItem = this.items[this.selected]
                if (selectedItem.dataset.hasOwnProperty('disabled')) return
                window.location.href = selectedItem.dataset.commandValue
                open = false
                closing = true
            } else {
                const len = this.items.length
                if (! len || ! ['ArrowDown', 'ArrowUp'].includes(e.key)) return
                e.preventDefault()
                this.selected =
                    (this.selected + (e.key === 'ArrowDown' ? 1 : -1) + len) % len
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
