@extends('layouts.plantilla')
@section('tittle','create')
@section('content')
    <p>vista create</p>
    <strong>Formulario</strong>
    <br>
    <form action="">
        <label for="">Nombre
        <input type="text" name="name">

        </label>
        <label for="">Descripcion
        <textarea name="description" rows="5"></textarea>
        </label>
        <label for="">categoria
        <input type="text" name="categoria">
        </label>
    </form>
@endsection