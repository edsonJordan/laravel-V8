<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        return "Bienvenidos a la pagina cursos";
    }
    public function create($curso)
    {
        return "Bienvenido al curso $curso";
    }
    public function show($curso, $categoria = null)
    {
        if ($categoria) {
            return "Bienvenido al curso $curso, de la categoria $categoria ";
        }else{
            return "Bienvenido al curso $curso";
        }
    }
}
