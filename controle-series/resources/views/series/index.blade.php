<x-layout title="Series">
    <a href="{{ route('series.create')  }}" class="btn btn-dark mb-2">Add</a>
    @isset($successfullyMessage)
    <div class="alert alert-success">
        {{ $successfullyMessage }}
    </div>
    @endisset
    <ul class="list-group">
        @foreach($series as $series)

            <li class="list-group-item d-flex align-items-center justify-content-between">
                <div>
                    {{ $series->name }}
                </div>

                <div class="d-flex align-items-center">
                    <form action="{{ route('series.destroy', $series->id) }}" method="POST" class="me-1">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">
                            X
                        </button>
                    </form>
                        <a href="{{ route('series.edit', $series->id)  }}" class="btn btn-dark btn-sm">
                            Update
                        </a>
                </div>
            </li>

        @endforeach
    </ul>
</x-layout>

{{--Agora que preparamos nosso componente de layout, basta chamá-lo no arquivo index.blade.php ou em--}}
{{--qualquer outro local onde desejamos utilizar esse layout personalizado. Para fazer isso,--}}
{{--basta usar a diretiva @extends do Blade para estender o layout que criamos ou utilizar o modo tag como foi--}}
{{--feito acima.--}}
