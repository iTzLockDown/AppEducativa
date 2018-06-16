@extends('layouts.home-admin')

@section('content')
    <div class="row">
        <div class="col-md-12">

            <h2 class="page-title">Actualizar Salon</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-success">
                <div class="panel-heading">Formulario</div>
                <div class="panel-body">
                    {!!Form::model($salon,['route'=>['xsalon.update', $salon->id],'method'=>'PUT','role'=>'form','enctype'=>'multipart/form-data', 'class'=>'form-horizontal'])!!}
                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 control-label">Codigo salon</label>
                        <div class="col-lg-10">
                            {!!Form::text('codigo',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Nombres ','class'=>'form-control'])!!}
                        </div>

                    </div>
                    <div class="hr-dashed"></div>
                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 control-label">Dia 1</label>
                        <div class="col-lg-4">
                            {{ Form::select('dia', [
                               'Lunes' => 'Lunes',
                               'Martes' => 'Martes',
                               'Miercoles' => 'Miercoles',
                               'Jueves' => 'Jueves',
                               'Viernes' => 'Viernes',
                               'Sabado' => 'Sabado',
                               'Domingo' => 'Domingo',$salon->dia]
                            ,$attributes = array(),array('class' => 'selectpicker', 'data-selected-text-format'=>'count')) }}
                        </div>

                        <label for="inputPassword1" class="col-lg-2 control-label">Horario 1</label>
                        <div class="col-lg-4">
                            {!!Form::text('horario',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' hora','class'=>'form-control'])!!}
                        </div>

                    </div>

                    <div class="hr-dashed"></div>
                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 control-label">Dia 2</label>
                        <div class="col-lg-4">
                            {{ Form::select('dia1', [
                               'Lunes' => 'Lunes',
                               'Martes' => 'Martes',
                               'Miercoles' => 'Miercoles',
                               'Jueves' => 'Jueves',
                               'Viernes' => 'Viernes',
                               'Sabado' => 'Sabado',
                               'Domingo' => 'Domingo',$salon->dia1]
                            ,$attributes = array(),array('class' => 'selectpicker', 'title'=>'Seleccionar...','data-selected-text-format'=>'count')) }}
                        </div>

                        <label for="inputPassword1" class="col-lg-2 control-label">Horario 2</label>
                        <div class="col-lg-4">
                            {!!Form::text('horario2',null,['autocomplete'=>'off', 'placeholder' =>' Apellido Materno','class'=>'form-control'])!!}
                        </div>

                    </div>
                    <div class="hr-dashed"></div>

                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 control-label">Dia 3</label>
                        <div class="col-lg-4">
                            <div class="col-lg-4">
                                {{ Form::select('dia2', [
                                   'Lunes' => 'Lunes',
                                   'Martes' => 'Martes',
                                   'Miercoles' => 'Miercoles',
                                   'Jueves' => 'Jueves',
                                   'Viernes' => 'Viernes',
                                   'Sabado' => 'Sabado',
                                   'Domingo' => 'Domingo',$salon->dia3]
                                ,$attributes = array(),array('class' => 'selectpicker', 'title'=>'Seleccionar...','data-selected-text-format'=>'count')) }}
                            </div>
                        </div>

                        <label for="inputPassword1" class="col-lg-2 control-label">Horario 3</label>
                        <div class="col-lg-4">
                            {!!Form::text('horario3',null,['autocomplete'=>'off', 'placeholder' =>' Apellido Materno','class'=>'form-control'])!!}
                        </div>

                    </div>
                    <div class="hr-dashed"></div>
                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 control-label">Ambiente</label>
                        <div class="col-lg-4">
                            {!!Form::text('ambiente',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Amibnete o eficio','class'=>'form-control'])!!}
                        </div>

                        <label for="inputPassword1" class="col-lg-2 control-label">Curso</label>
                        <div class="col-lg-4">
                            {!!Form::select('curso',$curso,null)!!}</div>
                    </div>

                    <div class="hr-dashed"></div>
                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 control-label">Docente</label>
                        <div class="col-lg-10">

                            {!!Form::select('docente',$doc,null)!!}</div>

                    </div>





                    <div class="hr-dashed"></div>
                    <div class="form-group">
                        <div class="col-sm-8 col-sm-offset-2">
                            <button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-pencil-square-o"></i> Actualizar</button>
                            <a href="{{route('admin.sread')}}" class="btn btn-danger btn-sm"> Cancel <i class=" fa fa-fast-forward"></i> </a>

                        </div>
                    </div>
                    {!!Form::close()!!}

                </div>
            </div>





        </div>
    </div>

@stop

