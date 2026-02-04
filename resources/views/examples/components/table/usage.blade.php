<x-ui.table>
    <x-ui.table.caption>A list of your recent invoices.</x-ui.table.caption>
    {{-- Head --}}
    <x-ui.table.thead>
        <x-ui.table.tr>
            <x-ui.table.th>Invoice</x-ui.table.th>
            <x-ui.table.th>Status</x-ui.table.th>
            <x-ui.table.th>Method</x-ui.table.th>
            <x-ui.table.th class="text-right">Amount</x-ui.table.th>
        </x-ui.table.tr>
    </x-ui.table.thead>
    {{-- Body --}}
    <x-ui.table.tbody>
        <x-ui.table.tr>
            <x-ui.table.td>INV001</x-ui.table.td>
            <x-ui.table.td>Paid</x-ui.table.td>
            <x-ui.table.td>Credit Card</x-ui.table.td>
            <x-ui.table.td class="text-right tabular-nums">$250.00</x-ui.table.td>
        </x-ui.table.tr>
    </x-ui.table.tbody>
    {{-- Footer --}}
    <x-ui.table.tfoot>
        <x-ui.table.tr>
            <x-ui.table.td colspan="3">Total</x-ui.table.td>
            <x-ui.table.td class="text-right tabular-nums">$250.00</x-ui.table.td>
        </x-ui.table.tr>
    </x-ui.table.tfoot>
</x-ui.table>
