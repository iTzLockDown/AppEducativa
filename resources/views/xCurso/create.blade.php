@extends('layouts.home-admin')

@section('content')
    <div class="row">
        <div class="col-md-12">

            <h2 class="page-title">Registro Curso</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-success">
                <div class="panel-heading">Formulario</div>
                <div class="panel-body">
                    {!!Form::open(['route'=>'xcurso.store','method'=>'POST','role'=>'form','enctype'=>'multipart/form-data', 'class'=>'form-horizontal'])!!}
                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 control-label">Nombre</label>
                        <div class="col-lg-10">
                            {!!Form::text('nombre',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Nombres ','class'=>'form-control'])!!}
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 control-label">Grado</label>
                        <div class="col-lg-4">
                            {{ Form::select('grado', [
                               '1' => 'Primer Grado',
                               '2' => 'Segundo Grado',
                               '3' => 'Tercer Grado',
                               '4' => 'Cuarto Grado',
                               '5' => 'Quinto Grado',
                               '6' => 'Sexto Grado',]
                            ,$attributes = array(),array('class' => 'selectpicker', 'title'=>'Seleccionar...','data-selected-text-format'=>'count')) }}
                        </div>

                        <label for="inputPassword1" class="col-lg-2 control-label">Hora</label>
                        <div class="col-lg-4">
                            {{ Form::select('horas', [
                               '1' => '1 Hora',
                               '2' => '2 Horas',
                               '3' => '3 Horas',
                               '4' => '4 Horas',
                               '5' => '5 Horas',
                               '6' => '6 Horas',
                               '7' => '7 Horas',
                               '8' => '8 Horas',]
                            ,$attributes = array(),array('class' => 'selectpicker', 'title'=>'Seleccionar...','data-selected-text-format'=>'count')) }}
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 control-label">Descripción</label>
                        <div class="col-lg-10">
                            {!!Form::textarea('descripcion',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Descripcion','class'=>'form-control'])!!}
                        </div>

                    </div>


                    <div class="hr-dashed"></div>
                    <div class="form-group">
                        <div class="col-sm-8 col-sm-offset-2">
                            <button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-pencil-square-o"></i> Registrar</button>
                            <a href="{{route('admin.cread')}}" class="btn btn-danger btn-sm"> Cancel <i class=" fa fa-fast-forward"></i> </a>

                        </div>
                    </div>

                    {!!Form::close()!!}

                </div>
            </div>





        </div>
    </div>

@stop

