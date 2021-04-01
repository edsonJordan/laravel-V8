@extends('layouts.plantilla')
@section('tittle','Create ')
@section('content')
    <h1> Bienvenido aqui crearás cualquier curso</h1>
    
    <form action="{{route('cursos.store') }}" method="post">
        @csrf
        <label for="">
            Nombre:
            <br>
            <input type="text" name="name" id="">
        </label>
        <br>
        <label for="">
            Descripción:
            <br>
            <input type="text" name="description" id="  ">
        </label>
        <br>
        <label for="">
            Categoria:
            <br>
            <input type="text" name="category" id="">
        </label>
        <br>
        <input type="submit" value="Enviar">
    </form>
@endsection
