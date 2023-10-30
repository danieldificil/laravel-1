<x-layout title="Series">
    <a href="/series/create">Add</a>
    <ul>
        @foreach($series as $serie)
            <li>{{ $serie  }}</li>
        @endforeach
    </ul>
</x-layout>
