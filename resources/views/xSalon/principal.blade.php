@extends('layouts.home-admin')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2 class="page-title">Panel de administracion: Salones Activos</h2>
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
            <h3 class="panel-title">Salones activos</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="" align="left">

                        {!!Form::open(['route'=>'admin.tread','method'=>'GET','role'=>'form','enctype'=>'multipart/form-data','files' => true])!!}

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
                            <a href="{{ route('admin.screate') }}" class="btn btn-linkedin btn-sm" id="btnNuevo"><i class="fa fa-users"></i> Nuevo Salon</a>
                        </div>
                    </div>
                    <br>
                    <br>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Codigo</th>
                            <th>Docente</th>
                            <th>Curso</th>
                            <th colspan="2"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($salon as $salones):?>
                        <tr>
                            <td>{{$salones->id}}</td>
                            <td>{{$salones->codigo}}</td>
                            <td>
                                <?php foreach ($doc as $docente):?>
                                @if($salones->docente == $docente->id)
                                    {{$docente->nombre}} {{$docente->apellidop}}
                                @endif
                                <?php endforeach;?>
                            </td>
                            <td>
                                <?php foreach ($curso as $cursos):?>
                                @if($salones->curso == $cursos->id)
                                    {{$cursos->nombre}}
                                @endif
                                <?php endforeach;?>

                            </td>
                            <td>
                                {!!link_to_route('admin.sedit', $title = 'Editar', $parameters = $salones->id, $attributes = ['class'=>'btn btn-info btn-sm '])!!}
                                <a href="{{ route('admin.sdelete' ,$parameters = $salones->id)}}" onclick="return confirm('Esta seguro de eliminar el Tutor')" class="btn btn-warning btn-sm" title="Eliminar"> <i class="fa fa-close"></i> </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <center>    {!! $salon->links() !!}</center>
    </div>

@stop

