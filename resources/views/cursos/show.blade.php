@extends('layuouts.plantilla')

@section('title', 'Curso ' . $curso->name)

@section('content')
    <h1>Bienvenido al curso: {{ $curso->name }}</h1>
    <a href="{{ route('cursos.index') }}">Volver a cursos</a>
    <br>
    <a href="{{ route('cursos.edit', $curso->id) }}">Editar Curso</a>
    <p><strong>Categoria: </strong>{{ $curso->categoria }}</p>
    <p><strong>Descripcion: </strong>{{ $curso->descripcion }}</p>

    <form action="{{ route('curso.destroy', $curso) }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit">Eliminar</button>
    </form>
@endsection

