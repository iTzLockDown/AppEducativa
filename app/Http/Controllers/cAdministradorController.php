<?php

namespace ProyectoAppEducativa\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use ProyectoAppEducativa\tb_administrador;

class cAdministradorController extends Controller
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
        $cadmin = new tb_administrador;
        $cadmin ->nombre       = $request->nombre;
        $cadmin ->apellidop    = $request->apellidop;
        $cadmin ->apellidom    = $request->apellidom;
        $cadmin ->documento    = $request->documento;
        $cadmin ->direccion    = $request->direccion;
        $cadmin ->celular        = $request->celular;
        $cadmin ->tipo_adm     = $request->tipo_adm;
        $cadmin ->email      = $request->email;
        $cadmin ->password     = bcrypt($request->email);
        $cadmin -> save();

        Session::flash('message', 'Administrador registrado correctamente.');
        return Redirect::route('admin.aread');
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
        $eadmin =tb_administrador::find($id);
        $eadmin ->nombre       = $request->nombre;
        $eadmin ->apellidop    = $request->apellidop;
        $eadmin ->apellidom    = $request->apellidom;
        $eadmin ->documento    = $request->documento;
        $eadmin ->direccion    = $request->direccion;
        $eadmin ->celular        = $request->celular;
        $eadmin ->tipo_adm     = $request->tipo_adm;
        $eadmin ->email      = $request->email;
        $eadmin ->password     = bcrypt($request->email);
        $eadmin -> save();
        Session::flash('message', 'Administrador editado correctamente.');
        return Redirect::route('admin.aread');
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
