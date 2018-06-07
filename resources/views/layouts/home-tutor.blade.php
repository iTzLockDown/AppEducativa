<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>AppEducativa</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mystyle.css') }}" rel="stylesheet">

    <!-- Add custom CSS here -->

</head>

<body>

<div id="wrapper">

    <!-- Sidebar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="./">AppEducativa<sup><small><span class="label label-success"></span></small></sup> </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <ul class="nav navbar-nav">
                </ul>

                <li><a href=""><i class="fa fa-home"></i>Estudiante</a></li>
                <li><a href=""><i class="fa fa-home"></i>Reuniones</a></li>
                <li>  <a href=""><i class='fa fa-tasks'></i> Comportamiento</a></li>
                {{--                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Listas <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="">Asistencia</a></li>
                                        <li><a href="">Comportamiento</a></li>
                                        <li><a href="">Calificaciones</a></li>
                                    </ul>
                                </li>--}}


            </ul>


            <ul class="nav navbar-nav navbar-right navbar-user">
                <li class="dropdown user-dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        {{ Auth::user()->nombre }} <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="">Configuracion</a></li>
                        <li><a href="{{ route('tutor.logout') }} ">Salir</a></li>
                    </ul>
            </ul>

        </div>
    </nav>

    <div id="page-wrapper">

        @yield('content')
        <hr>
        <p></p>

    </div><!-- /#page-wrapper -->

</div><!-- /#wrapper -->

<!-- JavaScript -->

<script src="{{ asset('js/jquery.min.js') }}" defer></script>
<script src="{{ asset('js/bootstrap.min.js') }}" defer></script>


</body>
</html>




<!doctype html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="theme-color" content="#3e454c">
    <link rel="shortcut icon" href="{{ URL::asset('img/icon.png') }}">

    <title>Panel de Administracion</title>

    <!-- Font awesome -->
{!!Html::style('css/font-awesome.min.css')!!}
<!-- Sandstone Bootstrap CSS -->
{!!Html::style('css/bootstrap.min.css')!!}
<!-- Bootstrap Datatables -->
{!!Html::style('css/dataTables.bootstrap.min.css')!!}
<!-- Bootstrap social button library -->
{!!Html::style('css/bootstrap-social.css')!!}
<!-- Bootstrap select -->
{!!Html::style('css/bootstrap-select.css')!!}
<!-- Bootstrap file input -->
{!!Html::style('css/fileinput.min.css')!!}
<!-- Awesome Bootstrap checkbox -->
{!!Html::style('css/awesome-bootstrap-checkbox.css')!!}
<!-- Admin Stye -->
    {!!Html::style('css/style.css')!!}
    {!!Html::style('css/mystyle.css')!!}



</head>

<body>
<div class="brand clearfix">
    <a href="#" class="logo"><img src="{{ URL::asset('img/logo.jpg') }}" class="img-responsive" alt=""></a>
    <span class="menu-btn"><i class="fa fa-bars"></i></span>
    <ul class="ts-profile-nav">
        <li><a href="#"><i class="fa fa-commenting-o"></i> Ayuda</a></li>
        <li class="ts-account">
            <a href="#"><img src="{{ URL::asset('img/ts-avatar.jpg') }}" class="ts-avatar hidden-side" alt="">{{Auth::user()->nombre}}  <i class="fa fa-angle-down hidden-side"></i></a>
            <ul>
                <li><a href="{{ URL::to('account/edit', $parameters = Auth::user()->id) }}"><i class="fa fa-edit"> </i> Editar Perfil</a></li>
                <li><a href="{{ URL::to('account/changep', $parameters = Auth::user()->id) }}"><i class="fa fa-cog"></i> Cambiar Password</a></li>
                <li><a href="{{ URL::to('logout') }}"><i class="fa fa-sign-out"></i> Salir</a></li>
            </ul>
        </li>
    </ul>
</div>

<div class="ts-main-content">
    <nav class="ts-sidebar">
        <ul class="ts-sidebar-menu">




            <li class="ts-label">Principal</li>
            <li class="open"><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="{{ URL::to('noticia') }}"><i class="fa fa-newspaper-o"></i> Noticias</a></li>
            <li><a href="{{ URL::to('descripcion') }}"><i class="fa fa-file-text-o"></i> Nosotros</a></li>
            <li><a href="#"><i class="fa fa-edit"></i> Egresados</a></li>
            <li><a href="#"><i class="fa fa-file-text-o"></i> Usuarios</a></li>
            @if(Auth::user()->permiso ==1)

                <li><a href="#"><i class="fa fa-user"></i> Zona Administrativa</a>
                    <ul>
                        <li><a href="{{ URL::to('usuario') }}">Usuarios</a></li>
                        <li><a href="#">Configurar</a></li>
                    </ul>
                </li>
            @endif



        </ul>
    </nav>
    <div class="content-wrapper">
        <div class="container-fluid">

            @yield('content')

        </div>
    </div>
</div>

<!-- Loading Scripts -->
{!!Html::script('js/jquery.min.js')!!}
{!!Html::script('js/bootstrap-select.min.js')!!}
{!!Html::script('js/bootstrap.min.js')!!}
{!!Html::script('js/jquery.dataTables.min.js')!!}
{!!Html::script('js/dataTables.bootstrap.min.js')!!}
{!!Html::script('js/Chart.min.js')!!}
{!!Html::script('js/fileinput.js')!!}
{!!Html::script('js/chartData.js')!!}
{!!Html::script('js/main.js')!!}
{!!Html::script('js/action.js')!!}




</body>

</html>