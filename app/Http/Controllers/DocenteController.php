<?php

namespace ProyectoAppEducativa\Http\Controllers;

use Illuminate\Http\Request;

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
}
