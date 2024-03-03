<x-app-layout>

    <head>


        <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    </head>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Overzicht') }}
        </h2>
    </x-slot>
    <table>

        <th>Slug</th>
        <th>Name</th>
        <th>Amount</th>
        <th>In Stock</th>
        <th>Allergenic info</th>
        <th>Delivery info</th>

        @foreach ($products as $product)
        <tr>
            <td>{{ $product->barcode }}</td>
            <td>{{ $product->naam }}</td>
            <td>{{ $product->magazijn->verpakkings_eenheid }}</td>
            <td>{{ $product->magazijn->aantal_aanwezig ?? '✗' }}</td>
            <td>

                @if(is_a($product->productperallergeens, 'Illuminate\Database\Eloquent\Collection') && $product->productperallergeens->count() > 0)
                <a href="{{ route('allergenen.show', $product->id) }}"><span class="material-symbols-outlined red">close</span></a> <!-- Dit is een kruisje -->
                @else
                <span class="material-symbols-outlined green">done</span> <!-- Dit is een vinkje -->
                @endif
            </td>
            <td>
                <a href="{{ route('leverantie.show', $product->id) }}"><span style="color: teal;" class="material-symbols-outlined">info</span></a>
            </td>
        </tr>
        @endforeach
    </table>

</x-app-layout>