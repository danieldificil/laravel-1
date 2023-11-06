<x-layout title="Edição de Série {{ $serie->name }}">
    <x-series.form :action="route('series.update')" :name="$serie->name"></x-series.form>
</x-layout>

