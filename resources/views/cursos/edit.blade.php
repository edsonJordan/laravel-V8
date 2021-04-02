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
            <input type="text" name="name" value=" {{ old('name', $curso->name)}}" >
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
            <textarea name="description" id="" cols="30" rows="10">{{old('description', $curso->description)}}</textarea>
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
            <input type="text" name="categoria" value=" {{ old('categoria', $curso->categoria) }} " id="">
        </label>
        @error('categoria')
        <br>
        <small>*{{ $message }}</small>
        <br>
        @enderror
        <br>
        <input type="submit" value="Enviar">
    </form>
@endsection