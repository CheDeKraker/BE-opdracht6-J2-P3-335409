<x-app-layout>

    <head>

        <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />

    </head>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Leverings Product') }}
        </h2>
    </x-slot>

    <h2 class="center">Naam leverancier: {{ $Levering->naam }}</h2>
    <h2 class="center">Contactpersoon leverancier: {{ $Levering->contactpersoon }}</h2>
    <h2 class="center">Mobiel: {{ $Levering->mobiel }}</h2>
    <div class="center">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form method="POST" action="{{ route('levering.store', ['id' => $Levering->id]) }}">
            @csrf
            <label for="aantal_producteenheden">Aantal producteenheden:</label>
            <input style="color: black; margin-left: 15px; border-radius:2rem;" type="number" type="number" id="aantal_producteenheden" name="aantal_producteenheden" value="{{ old('aantal_producteenheden') }}"><br>
            <label for="datum_eerstvolgende_levering">Datum eerstvolgende levering:</label>
            <input style="color: black; border-radius:2rem; margin-top: 1rem;" type="date" id="datum_eerstvolgende_levering" name="datum_eerstvolgende_levering"><br>
            <button type="submit" style="background-color: black; color: white; padding: 1rem 2.45rem; border-radius: 25px; margin-top: 1rem; border: solid 2px white; cursor: pointer;">Sla op</button>
        </form>

        @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif
    </div>
    <div class="center">
        <x-primary-button style="background-color: black; color: white; padding: 1rem 2.45rem; border-radius: 25px; margin-top: 1rem; border: solid 2px white; cursor: pointer;" class="center">
            <a href="{{ route('leverancier') }}">Terug</a>
        </x-primary-button>
        <x-primary-button style="background-color: black; color: white; padding: 1rem 2.45rem; border-radius: 25px; margin-top: 1rem; border: solid 2px white; cursor: pointer;" class="center">
            <a href="{{ route('dashboard') }}">Home</a>
        </x-primary-button>
    </div>
</x-app-layout>