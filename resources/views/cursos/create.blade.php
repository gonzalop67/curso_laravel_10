@extends('layuouts.plantilla')

@section('title', 'Cursos create')

@section('content')
    <h1>En esta página podrás crear un curso</h1>
    <form action="{{ route('cursos.store') }}" method="POST">
        @csrf
        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{ old('name') }}">
        </label>

        @error('name')
            <br>
            <span>*{{ $message }}</span>
            <br>
        @enderror

        <br>
        <label>
            Slug:
            <br>
            <input type="text" name="slug" value="{{ old('slug') }}">
        </label>

        @error('slug')
            <br>
            <span>*{{ $message }}</span>
            <br>
        @enderror

        <br>
        <label>
            Descripcion:
            <br>
            <textarea name="descripcion" rows="5">{{ old('descripcion') }}</textarea>
        </label>

        @error('descripcion')
            <br>
            <span>*{{ $message }}</span>
            <br>
        @enderror

        <br>
        <label>
            Categoria:
            <br>
            <input type="text" name="categoria" value="{{ old('categoria') }}">
        </label>

        @error('categoria')
            <br>
            <span>*{{ $message }}</span>
            <br>
        @enderror

        <br><br>
        <input type="submit" value="Enviar Formulario">
    </form>
@endsection
