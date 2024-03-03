<x-app-layout>

    <head>

        <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />

    </head>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Leverings Informatie') }}
        </h2>
    </x-slot>

    @if($products->magazijn->aantal_aanwezig == 0)
    <?php
    $product = $products->productPerLeveranciers->first();
    ?>
    <h2 class="center">Er is van dit product op dit moment geen voorraad aanwezig, de verwachte eerstvolgende levering is: {{ $product->datum_eerstvolgende_levering }}</h2>
    <script>
        setTimeout(function() {
            window.location.href = "{{ route('overzicht') }}";
        }, 4000);
    </script>
    @else

    <?php
    $leverancier = $products->productPerLeveranciers->first()->leverancier;
    ?>

    <h2 class="center">Naam leverancier: {{ $leverancier->naam }}</h2>
    <h2 class="center">Contactpersoon leverancier: {{ $leverancier->contactpersoon }}</h2>
    <h2 class="center">Leverancier nummer: {{ $leverancier->leverancier_nummer }}</h2>
    <h2 class="center">Mobiel: {{ $leverancier->mobiel }}</h2>

    <table>
        <thead>
            <th>Naam Product</th>
            <th>Datum laatste levering</th>
            <th>Aantal</th>
            <th>Eerst volgende levering</th>
        </thead>
        <tbody>
            @foreach ($products->productPerLeveranciers as $product)
            <tr>
                <td>{{ $product->product->naam }}</td>
                <td>{{ $product->datum_levering }}</td>
                <td>{{ $product->aantal }}</td>
                <td>{{ $product->datum_eerstvolgende_levering }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</x-app-layout>