@extends('layouts.home-admin')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h4 class="page-title">Codigo: {{$salon->codigo}}</h4>
            <h4 class="page-title">Salon: <?php foreach ($curso as $cursos):?>
                @if($salon->curso == $cursos->id)
                    {{$cursos->nombre}}
                @endif
                <?php endforeach;?></h4>
            <h4 class="page-title">Dias: {{$salon->dia}}, {{$salon->dia1}}, {{$salon->dia2}}</h4>
            <h4 class="page-title">Docente:
                <?php foreach ($doc as $docente):?>
                @if($salon->docente == $docente->id)
                    {{$docente->nombre}} {{$docente->apellidop}}
                @endif
                <?php endforeach;?>
            </h4>
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
            <h3 class="panel-title">Matriculados</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="" align="left">

                        {!!Form::open(['route'=>'admin.eread','method'=>'GET','role'=>'form','enctype'=>'multipart/form-data','files' => true])!!}

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
                            {!!link_to_route('admin.matread', $title = 'Matricular', $parameters = $salon->id, $attributes = ['class'=>'btn btn-success btn-sm '])!!}
                        </div>
                    </div>
                    <br>
                    <br>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th colspan="2"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($matricula as $mat):?>
                        @if($mat->salon ==$salon->id)

                        <tr>
                                <td>{{$mat->id}}</td>
                                <td>
                                    @foreach ($estudiante as $est)
                                        @if($mat->estudiantes == $est->id)
                                            {{ $est->apellidop }} {{ $est->apellidom }}, {{ $est->nombre }}
                                        @endif
                                    @endforeach


                                </td>
                                <td>
                                    <a href="{{ route('admin.matdel' ,$parameters = $mat->id)}}" onclick="return confirm('Esta seguro de desmatricular al estudiante.')" class="btn btn-warning btn-sm" title="Eliminar"> <i class="fa fa-close"></i> </a>
                                </td>
                            </tr>
                        @endif
                        <?php endforeach; ?>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

@stop

