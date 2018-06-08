<?php

namespace ProyectoAppEducativa\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use ProyectoAppEducativa\tb_tutor;

class cTutorController extends Controller
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
        $ctutor = new tb_tutor;
        $ctutor ->nombre       = $request->nombre;
        $ctutor ->apellidop    = $request->apellidop;
        $ctutor ->apellidom    = $request->apellidom;
        $ctutor ->documento    = $request->documento;
        $ctutor ->direccion    = $request->direccion;
        $ctutor ->celular        = $request->celular;
        $ctutor ->relacion     = $request->relacion;
        $ctutor ->email      = $request->email;
        $ctutor ->password     = bcrypt($request->email);
        $ctutor -> save();

        Session::flash('message', 'Tutor registrado correctamente.');
        return Redirect::route('admin.tread');
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

        $etutor =tb_tutor::find($id);
        $etutor ->nombre       = $request->nombre;
        $etutor ->apellidop    = $request->apellidop;
        $etutor ->apellidom    = $request->apellidom;
        $etutor ->documento    = $request->documento;
        $etutor ->direccion    = $request->direccion;
        $etutor ->celular        = $request->celular;
        $etutor ->relacion     = $request->relacion;
        $etutor ->email      = $request->email;
        $etutor ->password     = bcrypt($request->email);
        $etutor -> save();


        Session::flash('message', 'Tutor actualizado correctament.');
        return Redirect::route('admin.tread');
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
