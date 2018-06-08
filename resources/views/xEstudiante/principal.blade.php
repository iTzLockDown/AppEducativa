@extends('layouts.home-admin')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2 class="page-title">Panel de administracion: Estudiantes</h2>
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
            <h3 class="panel-title">Docentes</h3>
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
                            <a href="{{ route('admin.ecreate') }}" class="btn btn-linkedin btn-sm" id="btnNuevo"><i class="fa fa-users"></i> Nuevo Estudiante</a>
                        </div>
                    </div>
                    <br>
                    <br>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Dirección</th>
                            <th colspan="2"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($est as $estudiantes):?>
                        <tr>
                            <td>{{$estudiantes->id}}</td>
                            <td>{{$estudiantes->nombre}} {{$estudiantes->apellidop}}</td>
                            <td>{{$estudiantes->direccion}}</td>
                            <td>
                                {!!link_to_route('admin.eedit', $title = 'Editar', $parameters = $estudiantes->id, $attributes = ['class'=>'btn btn-info btn-sm '])!!}
                                <a href="{{ route('admin.edelete' ,$parameters = $estudiantes->id)}}" onclick="return confirm('Esta seguro de eliminar el Estudiante')" class="btn btn-warning btn-sm" title="Eliminar"> <i class="fa fa-close"></i> </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <center>    {!! $est->links() !!}</center>
    </div>

@stop

