@extends('layouts.plantilla')
@section('tittle','Show ' . $course->name)
@section('content')
    <a href="{{ route('cursos.index') }}">volver</a>
    <p>vista create: {{$course->name}}</p>
    <p><strong>Categoria: {{$course->categoria}}</strong></p>
    <p><strong>Descripcion: {{$course->description}}</strong></p>
@endsection