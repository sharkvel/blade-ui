@php
    $invoices = [
        [
            "invoice" => "INV001",
            "paymentStatus" => "Paid",
            "totalAmount" => '$250.00',
            "paymentMethod" => "Credit Card",
        ],
        [
            "invoice" => "INV002",
            "paymentStatus" => "Pending",
            "totalAmount" => '$150.00',
            "paymentMethod" => "PayPal",
        ],
        [
            "invoice" => "INV003",
            "paymentStatus" => "Unpaid",
            "totalAmount" => '$350.00',
            "paymentMethod" => "Bank Transfer",
        ],
        [
            "invoice" => "INV004",
            "paymentStatus" => "Paid",
            "totalAmount" => '$450.00',
            "paymentMethod" => "Credit Card",
        ],
        [
            "invoice" => "INV005",
            "paymentStatus" => "Paid",
            "totalAmount" => '$550.00',
            "paymentMethod" => "PayPal",
        ],
        [
            "invoice" => "INV006",
            "paymentStatus" => "Pending",
            "totalAmount" => '$200.00',
            "paymentMethod" => "Bank Transfer",
        ],
        [
            "invoice" => "INV007",
            "paymentStatus" => "Unpaid",
            "totalAmount" => '$300.00',
            "paymentMethod" => "Credit Card",
        ],
    ];
@endphp

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
        @foreach ($invoices as $invoice)
            <x-ui.table.tr>
                <x-ui.table.td class="font-medium">{{ $invoice["invoice"] }}</x-ui.table.td>
                <x-ui.table.td>{{ $invoice["paymentStatus"] }}</x-ui.table.td>
                <x-ui.table.td>{{ $invoice["paymentMethod"] }}</x-ui.table.td>
                <x-ui.table.td class="text-right tabular-nums">{{ $invoice["totalAmount"] }}</x-ui.table.td>
            </x-ui.table.tr>
        @endforeach
    </x-ui.table.tbody>
    {{-- Footer --}}
    <x-ui.table.tfoot>
        <x-ui.table.tr>
            <x-ui.table.td colspan="3">Total</x-ui.table.td>
            <x-ui.table.td class="text-right tabular-nums">$2,500.00</x-ui.table.td>
        </x-ui.table.tr>
    </x-ui.table.tfoot>
</x-ui.table>
