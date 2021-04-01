@extends('layouts.plantilla')
@section('tittle','Create ')
@section('content')
    <h1> Bienvenido aqui crearás cualquier curso</h1>
    
    <form action="{{route('cursos.store') }}" method="post">
        @csrf
        <label for="">
            Nombre:
            <br>
            <input type="text" name="name" id="" value=" {{old('name')}} ">
        </label>
        @error('name')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror
        <br>
        <label for="">
            Descripción:
            <br>
            <input type="text" name="description" id="  " value=" {{old('description')}} ">
        </label>
        @error('description')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror
        <br>
        <label for="">
            Categoria:
            <br>
            <input type="text" name="category" id="" value=" {{old('category')}}" >
        </label>
        @error('category')
        <br>
        <small>*{{ $message }}</small>
        <br>
        @enderror
        <br>
        <input type="submit" value="Enviar">
    </form>
@endsection
