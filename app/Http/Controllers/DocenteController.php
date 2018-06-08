<?php

namespace ProyectoAppEducativa\Http\Controllers;

use Illuminate\Http\Request;
use ProyectoAppEducativa\tb_cursos;
use ProyectoAppEducativa\tb_salon;

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
}
