@extends('layouts.plantilla')
@section('tittle', 'edit')
@section('content')
    <p>vista edit</p>
    <strong>Formulario</strong>
    <br>
    <a href="{{ route('cursos.index') }}"> volver</a>
    <br>
    <form action="{{ route('cursos.update',$curso {{--envia el curso original para editarlo--}})}}" method="post">
        @csrf {{--crea un token para que se pueda enviar--}}
        @method('put')
        <label for="">Nombre <br>
            <input type="text" name="name" value="{{$curso->name}}">
            <br>
        </label>
        <label for="">Descripcion <br>
            <textarea name="description" rows="5" >{{$curso->description}}</textarea>
            <br>
        </label>
        <label for="">categoria <br>
            <input type="text" name="categoria" value="{{$curso->categoria}}">
        </label>
        <br>
        <button type="submit">actualizar</button>

    </form>
@endsection
