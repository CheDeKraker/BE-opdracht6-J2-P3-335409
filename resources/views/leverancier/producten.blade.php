<x-app-layout>

    <head>

        <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    </head>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Geleverde Producten') }}
        </h2>
    </x-slot>

    <h2 class="center">Naam leverancier: {{ $leveranciers->naam }}</h2>
    <h2 class="center">Contactpersoon leverancier: {{ $leveranciers->contactpersoon }}</h2>
    <h2 class="center">Leverancier nummer: {{ $leveranciers->leverancier_nummer }}</h2>
    <h2 class="center">Mobiel: {{ $leveranciers->mobiel }}</h2>

    <table>
        <thead>
            <th>Naam Product</th>
            <th>Aantal in magazijn</th>
            <th>Verpakkingseenheid</th>
            <th>Laatste levering</th>
            <th>Nieuwe levering</th>
        </thead>
        <?php
        $Test = $leveranciers->productPerLeveranciers;
        $Test = $Test->first()->product;
        ?>
        @if($Test->magazijn->aantal_aanwezig == 0)
        <tbody>
            <tr class="center">
                <td colspan="5">Dit bedrijf heeft tot nu toe geen producten geleverd aan Jamin</td>
            </tr>
        </tbody>
        @else
        <tbody>
            @foreach($leveranciers->productPerLeveranciers as $perProduct)
            <tr>
                <td>{{ $perProduct->product->naam }}</td>
                <td>{{ $perProduct->product->magazijn->aantal_aanwezig }}</td>
                <td>{{ $perProduct->product->magazijn->verpakkings_eenheid }} kg</td>
                <td>{{ $perProduct->datum_levering }}</td>
                <td><a href="{{ route('levering.create', $perProduct->id) }}"><span style="color: blue;" class="material-symbols-outlined">add</span></a></td>
            </tr>
            @endforeach
        </tbody>
        @endif
    </table>
    <div class="center">
        <x-primary-button style="margin-top: 1rem;" class="center">
            <a href="{{ route('leverancier') }}">Terug</a>
        </x-primary-button>
        <x-primary-button style="margin-top: 1rem; margin-left: 1rem;" class="center">
            <a href="{{ route('dashboard') }}">Home</a>
        </x-primary-button>
    </div>
</x-app-layout>