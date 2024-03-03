<x-app-layout>

    <head>

        <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />

    </head>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Overzicht Allergenen') }}
        </h2>
    </x-slot>
    <h2 class="center">Naam: {{ $product->naam }}</h2>
    <h2 class="center">Barcode: {{ $product->barcode }}</h2>

    <table>
        <thead>
            <th>Naam</th>
            <th>Omschrijving</th>
        </thead>
        <tbody>
            @foreach ($product->productPerAllergeens as $Pallergeen)
            <tr>
                <td>{{ $Pallergeen->allergeen->naam }}</td>
                <td>{{ $Pallergeen->allergeen->omschrijving }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</x-app-layout>