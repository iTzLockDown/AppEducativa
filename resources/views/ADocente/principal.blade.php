@extends('layouts.home-doc')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2 class="page-title">Panel de administracion: Mis Salones</h2>
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
            <h3 class="panel-title">Salones</h3>
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
                            <th>Codigo</th>
                            <th>Nombre</th>
                            <th>Dia</th>
                            <th>Hora</th>
                            <th colspan="2"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($salon as $salones):?>
                        <tr>
                            @if($salones->docente == Auth::user()->id)



                                <td>{{$salones->id}}</td>
                                <td>{{$salones->codigo}} </td>
                                <td>{{$salones->curso}} </td>
                                <td><?php foreach ($curso as $cursos):?>
                                    @if($salones->curso == $cursos->id)
                                        {{$cursos->nombre}}
                                    @endif
                                    <?php endforeach;?>
                                </td>
                                <td>{{$salones->hora}} </td>
                                <td>{!!link_to_route('tutor.eread', $title = 'Asistencia', $parameters = $salones->id, $attributes = ['class'=>'btn btn-success btn-sm '])!!}
                                    {!!link_to_route('tutor.eread', $title = 'Notas', $parameters = $salones->id, $attributes = ['class'=>'btn btn-default btn-sm '])!!}
                                    {!!link_to_route('tutor.eread', $title = 'Comportamiento', $parameters = $salones->id, $attributes = ['class'=>'btn btn-info btn-sm '])!!}
                                    {!!link_to_route('tutor.eread', $title = 'Horario', $parameters = $salones->id, $attributes = ['class'=>'btn btn-danger btn-sm '])!!}

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

