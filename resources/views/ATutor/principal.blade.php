@extends('layouts.home-tutor')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2 class="page-title">Panel de administracion: Hijos</h2>
        </div>
    </div>
    @if(Session::has('message'))
        <div class="alert alert-success alert-dismissible" role = "alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <center>{{Session::get('message')}}</center>
        </div>
    @endif

    <div class="panel panel-info" >
        <div class="panel-heading">
            <h3 class="panel-title">Hijos</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="" align="left">

                        {!!Form::open(['route'=>'tutor.eread','method'=>'GET','role'=>'form','enctype'=>'multipart/form-data','files' => true])!!}

                        <div class="col-lg-4">
                            <input type="text" id="txtBuscar" name="nombre" class="form-control" placeholder="Buscar ..." autocomplete="off">
                        </div>
                        <div class="col-lg-2">
                            <button class="btn btn-tumblr btn-sm" id="btnBuscar" type="submit"><i class="fa fa-search"></i> Buscar</button>
                        </div>
                        <div class="col-lg-3">

                        </div>
                        {!!Form::close()!!}
                        <div class="col-lg-2">
                         </div>
                    </div>
                    <br>
                    <br>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre y Apellidos</th>
                            <th>Opciones</th>
                            <th colspan="2"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($est as $estudiantes):?>
                        <tr>
                            @if($estudiantes->tutor == Auth::user()->id)



                                <td>{{$estudiantes->id}}</td>
                                <td>{{$estudiantes->nombre}} {{$estudiantes->apellidop}}</td>
                                <td>{!!link_to_route('tutor.eread', $title = 'Asistencia', $parameters = $estudiantes->id, $attributes = ['class'=>'btn btn-success btn-sm '])!!}
                                    {!!link_to_route('tutor.eread', $title = 'Notas', $parameters = $estudiantes->id, $attributes = ['class'=>'btn btn-default btn-sm '])!!}
                                    {!!link_to_route('tutor.eread', $title = 'Comportamiento', $parameters = $estudiantes->id, $attributes = ['class'=>'btn btn-info btn-sm '])!!}
                                    {!!link_to_route('tutor.eread', $title = 'Horario', $parameters = $estudiantes->id, $attributes = ['class'=>'btn btn-danger btn-sm '])!!}

                                </td>
                                <td>
                                </td>
                             @endif
                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

@stop

