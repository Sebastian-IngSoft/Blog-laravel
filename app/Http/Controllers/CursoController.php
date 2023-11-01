<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    //encargado de mostrar la pagina principal
    public function index()
    {
        return view('cursos.index');
    }
    //para formularios o crear
    public function create()
    {
        return view('cursos.create');
    }
    //para mostrar
    public function show($course)
    {   
        //la cadena 'curso es lo que se usa en el view' 
        //compact = ['curso' =>$course]
        return view('cursos.show',compact('course'));
    }
}
