<?php

namespace ProyectoAppEducativa\Http\Controllers;

use Illuminate\Http\Request;
use ProyectoAppEducativa\tb_cursos;
use ProyectoAppEducativa\tb_matricula;
use ProyectoAppEducativa\tb_salon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('iEstudiante\home');
    }
    public function rCurso()
    {
        $mat = tb_matricula::all();
        $salon = tb_salon::all();
        $curso = tb_cursos::all();
        return view('iEstudiante.curso', compact('mat', 'salon', 'curso'));
    }
}
