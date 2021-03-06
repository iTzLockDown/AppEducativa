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
                            {!!link_to_route('admin.mread', $title = 'Regresar', $parameters = $salon->id, $attributes = ['class'=>'btn btn-info btn-sm '])!!}
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
                        <?php foreach ($estudiante as $est):?>
                        <tr>
                            <td>{{$est->id}}</td>
                            <td>{{$est->nombre}} {{$est->apellidop}}</td>
                            <td>
                                {!!link_to_route('admin.matcreate', $title = 'Matricular', $parameters = [$est->id, $salon->id], $attributes = ['class'=>'btn btn-default btn-sm '])!!}
                              </td>
                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

@stop

