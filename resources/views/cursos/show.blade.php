@extends('layouts.plantilla')
@section('tittle','Show ' .$curso ." - ".$categoria)
@section('content')
<h1>Bienvenido al curso <?php // $categoria?  $curso :"de la categoria ".$categoria  ;
if(!$categoria){
    echo $curso;
}else{
    echo $curso." de la categoria ".$categoria;
} ?>
   
</h1>


@endsection
