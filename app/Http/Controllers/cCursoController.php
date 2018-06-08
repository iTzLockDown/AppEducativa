<?php

namespace ProyectoAppEducativa\Http\Controllers;

use Illuminate\Http\Request;
use ProyectoAppEducativa\tb_cursos;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class cCursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ccurso = new tb_cursos;
        $ccurso ->nombre       = $request->nombre;
        $ccurso ->grado    = $request->grado;
        $ccurso ->horas    = $request->horas;
        $ccurso ->descripcion    = $request->descripcion;

        $ccurso -> save();

        Session::flash('message', 'Curso registrado correctamente.');
        return Redirect::route('admin.cread');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ecurso = tb_cursos::find($id);
        $ecurso ->nombre       = $request->nombre;
        $ecurso ->grado    = $request->grado;
        $ecurso ->horas    = $request->horas;
        $ecurso ->descripcion    = $request->descripcion;

        $ecurso -> save();

        Session::flash('message', 'Curso actualizado correctamente.');
        return Redirect::route('admin.cread');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
