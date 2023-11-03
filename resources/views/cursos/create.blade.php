@extends('layouts.plantilla')
@section('tittle', 'create')
@section('content')
    <p>vista create</p>
    <strong>Formulario</strong>
    <br>
    <form action="{{ route('cursos.store')}}" method="post">
        @csrf {{--crea un token para que se pueda enviar--}}
        <label for="">Nombre <br>
            <input type="text" name="name">
            <br>
        </label>
        <label for="">Descripcion <br>
            <textarea name="description" rows="5"></textarea>
            <br>
        </label>
        <label for="">categoria <br>
            <input type="text" name="categoria">
        </label>
        <button type="submit">enviar</button>

    </form>
@endsection
