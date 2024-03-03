<x-app-layout>

    <head>


        <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    </head>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Overzicht Leveranciers') }}
        </h2>
    </x-slot>
    <table>

        <th>Naam</th>
        <th>Contactpersoon</th>
        <th>Leveranciernummer</th>
        <th>Mobiel</th>
        <th>Aantal verschillende producten</th>
        <th>Toon producten</th>

        @foreach ($leveranciers as $leverancier)
        <tr>
            <td>{{ $leverancier->naam }}</td>
            <td>{{ $leverancier->contactpersoon }}</td>
            <td>{{ $leverancier->leverancier_nummer }}</td>
            <td>{{ $leverancier->mobiel }}</td>
            <td>{{ $leverancier->uniqueProductCount = $leverancier->productPerLeveranciers->unique('product_id')->count(); }}</td>
            <td><a href="{{ route('leverancier.producten', $leverancier->id) }}"><span style="color: teal;" class="material-symbols-outlined">info</span></a></td>
        </tr>
        @endforeach
    </table>

</x-app-layout>