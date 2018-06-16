<?php

namespace ProyectoAppEducativa\Http\Controllers;

use Illuminate\Http\Request;
use ProyectoAppEducativa\tb_docente;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class cDocenteController extends Controller
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
        $cdocente = new tb_docente;
        $cdocente ->nombre       = $request->nombre;
        $cdocente ->apellidop    = $request->apellidop;
        $cdocente ->apellidom    = $request->apellidom;
        $cdocente ->documento    = $request->documento;
        $cdocente ->direccion    = $request->direccion;
        $cdocente ->celular        = $request->celular;
        $cdocente ->profecion     = $request->profecion;
        $cdocente ->email      = $request->email;
        $cdocente ->password     = bcrypt($request->email);
        $cdocente -> save();

        Session::flash('message', 'Docente registrado correctamente.');
        return Redirect::route('admin.dread');

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

        $edocente =tb_docente::find($id);
        $edocente ->nombre       = $request->nombre;
        $edocente ->apellidop    = $request->apellidop;
        $edocente ->apellidom    = $request->apellidom;
        $edocente ->documento    = $request->documento;
        $edocente ->direccion    = $request->direccion;
        $edocente ->celular        = $request->celular;
        $edocente ->profecion     = $request->profecion;
        $edocente ->email      = $request->email;
        $edocente ->password     = bcrypt($request->email);
        $edocente -> save();

        Session::flash('message', 'Docente actualizado correctamente.');
        return Redirect::route('admin.dread');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return "hola mundo";
    }
}
