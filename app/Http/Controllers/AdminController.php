<?php

namespace ProyectoAppEducativa\Http\Controllers;

use Illuminate\Http\Request;
use ProyectoAppEducativa\tb_docente;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;


class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('iAdministrador\home');
    }
    public function homeDocente(Request $request)
    {
        $doc = tb_docente::Busqueda($request->get('nombre'))->orderBy('id', 'DESC')->paginate(5);
        return view('xDocente\principal', compact('doc'));
    }
    public function cDocente()
    {

        return view('xDocente\create');
    }


    public  function cDocenteEdit($id)
    {

        $e_docente =tb_docente::find($id);

        return view('xDocente.update',['docente'=>$e_docente]);
    }
    public  function cDocenteDelete($id)
    {

        $delete = tb_docente::find($id);
        $delete->delete();
        Session::flash('message', 'Docente eliminado exitosamente.!');
        return Redirect::route('admin.dread');
    }
}
