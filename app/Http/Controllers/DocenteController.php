<?php

namespace ProyectoAppEducativa\Http\Controllers;

use Illuminate\Http\Request;
use ProyectoAppEducativa\tb_cursos;
use ProyectoAppEducativa\tb_docente;
use ProyectoAppEducativa\tb_matricula;
use ProyectoAppEducativa\tb_salon;
use ProyectoAppEducativa\User;


class DocenteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:docente');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('iDocente\home');
    }
    public function dSalon()
    {
        $salon = tb_salon::all();
        $curso = tb_cursos::all();
        return view('ADocente\principal', compact('salon', 'curso'));
    }
    public  function  AsistSalon($id)
    {
        $salon = tb_salon::find($id);
        $doc = tb_docente::all();
        $curso = tb_cursos::all();
        $matricula = tb_matricula::all();
        $estudiante = User::all();
        return view('ADocente\asistencia', compact('matricula','salon', 'doc', 'curso', 'estudiante'));

    }
}
