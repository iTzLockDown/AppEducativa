<?php

namespace ProyectoAppEducativa\Http\Controllers;

use Illuminate\Http\Request;
use ProyectoAppEducativa\tb_salon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class cSalonController extends Controller
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
        $csalon = new tb_salon;
        $csalon ->codigo       = $request->codigo;
        $csalon ->horario    = $request->horario;
        $csalon ->horario1    = $request->horario;
        $csalon ->horario2    = $request->horario;
        $csalon ->dia    = $request->dia;
        $csalon ->dia1    = $request->dia1;
        $csalon ->dia2    = $request->dia2;
        $csalon ->ambiente    = $request->ambiente;
        $csalon ->curso    = $request->curso;
        $csalon ->docente    = $request->docente;

        $csalon -> save();

        Session::flash('message', 'Salon registrado correctamente.');
        return Redirect::route('admin.sread');
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
        $esalon = new tb_salon;
        $esalon ->codigo       = $request->codigo;
        $esalon ->horario    = $request->horario;
        $esalon ->horario1    = $request->horario;
        $esalon ->horario2    = $request->horario;
        $esalon ->dia    = $request->dia;
        $esalon ->dia1    = $request->dia1;
        $esalon ->dia2    = $request->dia2;
        $esalon ->ambiente    = $request->ambiente;
        $esalon ->curso    = $request->curso;
        $esalon ->docente    = $request->docente;

        $esalon -> save();

        Session::flash('message', 'Salon actualizado correctamente.');
        return Redirect::route('admin.sread');
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
