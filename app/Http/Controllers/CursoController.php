<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\AssignOp\Concat;

class CursoController extends Controller
{
    //encargado de mostrar la pagina principal
    public function index()
    {
        $curso = Curso::orderBy('id', 'desc')->paginate();
        return view('cursos.index', compact('curso'));
    }
    //para formularios o crear
    public function create()
    {
        return view('cursos.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'categoria' => 'required'
        ]);
        //si falla algo ya no ejecuta nada de abajo, y retorna a la pagina que estaba
        

        $curso = new Curso();
        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->categoria = $request->categoria;
        $curso->save();
        return redirect()->route('cursos.show', $curso);
    }
    //para mostrar
    public function show($id)
    {
        //forma 1 para pedir el curso por id
        $course = Curso::find($id);
        return view('cursos.show', compact('course'));
    }
    public function edit(Curso $curso)
    {
        //forma 2 para pedir el curso por id
        return view('cursos.edit', compact('curso'));
    }
    public function update(Curso $curso, Request $request)
    {
        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->categoria = $request->categoria;
        $curso->save();

        return redirect()->route('cursos.show',$curso);
    }
}
