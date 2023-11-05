@extends('layouts.plantilla')
@section('tittle', 'create')
@section('content')
    <p>vista create</p>
    <a href="{{ route('cursos.index') }}">Volver a home</a>
    <br>
    <strong>Formulario</strong>
    <br>
    <form action="{{ route('cursos.store')}}" method="post">
        @csrf {{--crea un token para que se pueda enviar--}}
        <label for="">Nombre <br>
            <input type="text" name="name" value="{{old('name')}}">{{--old para que recupere lo que escribioo antes--}}
            <br>
        </label>
        @error('name'){{--cuando hay un errir--}}
            <div>{{$message}}</div>
        @enderror
        <label for="">Descripcion <br>
            <textarea name="description" rows="5"></textarea>
            <br>
        </label>
        
        @error('description'){{--cuando hay un errir--}}
            <div>{{$message}}</div>
        @enderror
        <label for="">categoria <br>
            <input type="text" name="categoria">
        </label>
        
        @error('categoria'){{--cuando hay un errir--}}
            <div>{{$message}}</div>
        @enderror
        <button type="submit">enviar</button>

    </form>
@endsection
