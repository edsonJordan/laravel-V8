@extends('layouts.plantilla')
@section('tittle','Editar ')
@section('content')
    <h1> Bienvenido aqui editaras el curso</h1>

    <form action=" {{route('cursos.update', $curso)}} " method="post">
        @csrf
        @method('put')
        <label for="">
            Nombre:
            <br>
            <input type="text" name="name" value=" {{$curso->name}} " id="">
        </label>
        <br>
        <label for="">
            Descripción:
            <br>
            <textarea name="description" id="" cols="30" rows="10">{{$curso->description}}</textarea>
        </label>
        <br>
        <label for="">
            Categoria:
            <br>
            <input type="text" name="category" value=" {{$curso->categoria}} " id="">
        </label>
        <br>
        <input type="submit" value="Enviar">
    </form>
@endsection