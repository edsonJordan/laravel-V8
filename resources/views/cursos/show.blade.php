@extends('layouts.plantilla')
@section('tittle','Curso ' .$curso->name)
@section('content')
<h1>Bienvenido al curso {{$curso->name}}
</h1>
<a href="{{route('cursos.index')}}">Volver a cursos</a>
<br>
<a href="{{route('cursos.edit', $curso)}} ">Editar Curso</a>
<br>
<label for="">De la categoria {{$curso->categoria}}</label>
<p for="">{{$curso->description}}</p>
<form action="{{route('cursos.destroy', $curso)}} " method="POST">
    @csrf
    @method('delete')
    <button type="submit">Eliminar</button>
</form>
@endsection
