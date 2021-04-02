<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::orderBy('id', 'desc')->paginate();
        return view('cursos.index', compact('cursos'));
    }
    public function create()
    {
        return view('cursos.create');
    }
    public function store(StoreCurso $request)
    {
      
        $curso = new Curso();
        $curso->name=$request->name;
        $curso->description=$request->description;
        $curso->categoria=$request->category;
        $curso->save();
        return redirect()->route('cursos.show', $curso->id);
    }
    
    public function show(Curso $curso)
    {
        
        return view('cursos.show', compact('curso'));
       //  if (!$categoria) { return view('cursos.show', compact('curso','categoria'));} 
        
    }
    public function edit(Curso $curso)
    {
       
        return view('cursos.edit', compact('curso'));
    }
    public function update(Curso $curso, Request $request)
    {
        $request->validate([
            'name' =>'required',
            'description' => 'required',
            'category' => 'required'

        ]);
        $curso->name=$request->name;
        $curso->description=$request->description;
        $curso->categoria=$request->category;
        $curso->save();
        return redirect()->route('cursos.show', $curso->id);
    }
}
