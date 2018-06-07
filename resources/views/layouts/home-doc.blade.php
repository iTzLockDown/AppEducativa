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

                <li><a href=""><i class="fa fa-home"></i>Mi Horario</a></li>
                <li><a href=""><i class="fa fa-home"></i>Mis salones</a></li>
                <li>  <a href=""><i class='fa fa-tasks'></i>Asistencia</a></li>
                <li>  <a href=""><i class='fa fa-tasks'></i>Calificaciones</a></li>
                <li>  <a href=""><i class='fa fa-tasks'></i>Comportamiento</a></li>
                {{--                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Listas <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="">Asistencia</a></li>
                                        <li><a href="">Comportamiento</a></li>
                                        <li><a href="">Calificaciones</a></li>
                                    </ul>
                                </li>--}}

                <li><a href=""><i class="fa fa-users"></i>Reuniones</a></li>
            </ul>


            <ul class="nav navbar-nav navbar-right navbar-user">
                <li class="dropdown user-dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        {{ Auth::user()->nombre }} <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="">Configuracion</a></li>
                        <li><a href="{{ route('docente.logout') }} ">Salir</a></li>
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
