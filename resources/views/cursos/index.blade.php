@extends('layouts.plantilla')
@section('tittle','Cursos')
@section('content')
    <h1>Bienvenidos a la pagina cursos</h1>
        <a href="{{route('cursos.create')}}">Crear Curso</a>
            <ul>
                @foreach($cursos as $curso)
                <li>
                    <a href="{{route('cursos.show', $curso->id) }}">{{$curso->name}}</a>
                </li>
            @endforeach
            {{$cursos->links()}}
            </ul>

   
    
@endsection
