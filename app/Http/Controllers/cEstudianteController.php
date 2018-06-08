<?php

namespace ProyectoAppEducativa\Http\Controllers;

use Illuminate\Http\Request;
use ProyectoAppEducativa\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class cEstudianteController extends Controller
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
        $cestudiante = new User;
        $cestudiante ->nombre       = $request->nombre;
        $cestudiante ->apellidop    = $request->apellidop;
        $cestudiante ->apellidom    = $request->apellidom;
        $cestudiante ->documento    = $request->documento;
        $cestudiante ->telefono    = $request->telefono;
        $cestudiante ->direccion    = $request->direccion;
        $cestudiante ->celular        = $request->celular;
        $cestudiante ->tutor     = $request->tutor;
        $cestudiante ->email      = $request->email;
        $cestudiante ->password     = bcrypt($request->email);
        $cestudiante -> save();

        Session::flash('message', 'Estudiante registrado correctamente.');
        return Redirect::route('admin.eread');
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
        $eestudiante = User::find($id);
        $eestudiante ->nombre       = $request->nombre;
        $eestudiante ->apellidop    = $request->apellidop;
        $eestudiante ->apellidom    = $request->apellidom;
        $eestudiante ->documento    = $request->documento;
        $eestudiante ->telefono    = $request->telefono;
        $eestudiante ->direccion    = $request->direccion;
        $eestudiante ->celular        = $request->celular;
        $eestudiante ->tutor     = $request->tutor;
        $eestudiante ->email      = $request->email;
        $eestudiante ->password     = bcrypt($request->email);
        $eestudiante -> save();

        Session::flash('message', 'Estudiante actualizado correctamente.');
        return Redirect::route('admin.eread');
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
