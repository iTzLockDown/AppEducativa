@extends('layouts.home-user')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2 class="page-title">Mis cursos {{Auth::user()->id}}</h2>
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
            <h3 class="panel-title">Cursos</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">

                    <table class="table table-striped">
                        <thead>
                        <tr>

                            <th>CDC</th>
                            <th>Nombre del Curso</th>
                            <th>Codigo Salon</th>
                            <th colspan="2"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($mat as $matri):?>
                            @if(Auth::user()->id ==$matri->estudiantes)
                            <tr>

                                <td>{{ $matri->deg }}</td>
                                <td> <?php foreach ($salon as $salons):?>
                                    @if($matri->salon == $salons->id)
                                        @foreach ($curso as $c)
                                            @if($salons->curso == $c->id)
                                                {{$c->nombre}}
                                            @endif
                                        @endforeach
                                    @endif
                                    <?php endforeach;?> </td>
                                <td><?php foreach ($salon as $salons):?>
                                    @if($matri->salon == $salons->id)
                                        {{$salons->codigo}}
                                    @endif
                                    <?php endforeach;?>

                                </td>
                                <td>
                                    <a href="" class="btn btn-info btn-sm" id="btnAsistencia"><i class="fa fa-calendar"></i> Asistencias</a>
                                    <a href="" class="btn btn-default btn-sm" id="btnNotas"><i class="fa fa-calculator"></i> Notas</a>
                                    <a href="" class="btn btn-linkedin btn-sm" id="btnComportamiento"><i class="fa fa-arrow-circle-o-up"></i> Comportamiento</a>
                                </td>
                            </tr>
                            @endif
                        <?php endforeach;?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

@stop

