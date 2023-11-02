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
        $curso = Curso::paginate();
        return view('cursos.index', compact('curso'));
    }
    //para formularios o crear
    public function create()
    {
        return view('cursos.create');
    }
    //para mostrar
    public function show($id)
    {   
        $course = Curso::find($id);
        return view('cursos.show',compact('course'));
    }
}
