@extends('layouts.plantilla')
@section('tittle','Show ' . $course->name)
@section('content')
    <a href="{{ route('cursos.index') }}">volver</a>
    <br>
    <a href="{{ route('cursos.edit', $course {{--ya sabe que envia el id--}}) }}">editar curso</a>
    <p>vista create: {{$course->name}}</p>
    <p><strong>Categoria: {{$course->categoria}}</strong></p>
    <p><strong>Descripcion: {{$course->description}}</strong></p>
@endsection