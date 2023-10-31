<x-layout title="Series">
    <a href="/series/create" class="btn btn-dark mb-2">Add</a>
    <ul class="list-group">
        @foreach($series as $serie)
            <li class="list-group-item">{{ $serie->name}}</li>
        @endforeach
    </ul>
</x-layout>

{{--Agora que preparamos nosso componente de layout, basta chamá-lo no arquivo index.blade.php ou em--}}
{{--qualquer outro local onde desejamos utilizar esse layout personalizado. Para fazer isso,--}}
{{--basta usar a diretiva @extends do Blade para estender o layout que criamos ou utilizar o modo tag como foi--}}
{{--feito acima.--}}
