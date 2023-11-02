@extends('layouts.plantilla')
@section('tittle', 'home')
@section('content')
    <h1>vista index</h1>
    <a href="{{ route('cursos.create')}}">Crear curso</a>
    <br>
    <ul>
    @foreach ($curso as $item)

        <li><a href="{{ route('cursos.show', $item->id) }}">{{ $item->name }}</a></li>
    @endforeach

    </ul>
    {{$curso->links()}}
@endsection
