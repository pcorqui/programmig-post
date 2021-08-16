@extends('layouts.web')

@section('content')
    <div class="text-center">
        <h1 class="text-3xl text-gray-700 mb-2 uppercase">Últimos Cursos</h1>
        <h2 class="text xl text-gray-600">Fórmate como profesionale en tecnologia</h2>
        <h3 class="text xl text-gray-600">70% de los graduados duplican sus ingresos</h3>
    </div>
    <div class="grid grid-cols-3 gap-4 mt-8">
        @foreach ($posts as $post)
        <div class="bg-white shadow-lg rounded-lg px-4 py-6 text-center">
                <h2 class="text-lg text-gray-600 truncate uppercase">{{$post->name}}</h2>
                <h3 class="text-md text-gray-500">{{ $post->content}}</h3>
        </div>
        @endforeach
    </div>

@endsection
