<!doctype html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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



</head>

<body>
<div class="brand clearfix">
    <a href="#" class="logo"><img src="{{ URL::asset('img/logo.jpg') }}" class="img-responsive" alt=""></a>
    <span class="menu-btn"><i class="fa fa-bars"></i></span>
    <ul class="ts-profile-nav">
        <li><a href="#"><i class="fa fa-commenting-o"></i> Ayuda</a></li>
        <li class="ts-account">
            <a href="#"><img src="{{ URL::asset('img/ts-avatar.jpg') }}" class="ts-avatar hidden-side" alt="">{{ Auth::user()->nombre }}  <i class="fa fa-angle-down hidden-side"></i></a>
            <ul>
                <li><a href=""><i class="fa fa-edit"> </i> Editar Perfil</a></li>
                <li><a href=""><i class="fa fa-cog"></i> Cambiar Password</a></li>
                <li><a href="{{ route('docente.logout') }}"><i class="fa fa-sign-out"></i> Salir</a></li>
            </ul>
        </li>
    </ul>
</div>

<div class="ts-main-content">
    <nav class="ts-sidebar">
        <ul class="ts-sidebar-menu">




            <li class="ts-label">Principal</li>
            <li class="open"><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="{{ route('admin.dread') }}"><i class="fa fa-user"></i>Mi horario</a></li>
            <li><a href="{{route('docente.sread')}}"><i class="fa fa-user-md"></i>Mis salones</a></li>
            <li><a href="#"><i class="fa fa-users"></i>Asistencia</a></li>
            <li><a href="#"><i class="fa fa-institution"></i>Calificaciones</a></li>
            <li><a href="#"><i class="fa fa-institution"></i>Comportamiento</a></li>
            <li><a href="#"><i class="fa fa-institution"></i>Reuniones</a></li>
        </ul>
    </nav>
    <div class="content-wrapper">
        <div class="container-fluid">

            @yield('content')

        </div>
    </div>
</div>

<!-- Loading Scripts -->
{!!Html::script('js/app.js')!!}
{!!Html::script('js/jquery.min.js')!!}
{!!Html::script('js/bootstrap-select.min.js')!!}
{!!Html::script('js/bootstrap.min.js')!!}
{!!Html::script('js/jquery.dataTables.min.js')!!}
{!!Html::script('js/dataTables.bootstrap.min.js')!!}
{!!Html::script('js/Chart.min.js')!!}
{!!Html::script('js/fileinput.js')!!}
{!!Html::script('js/chartData.js')!!}
{!!Html::script('js/main.js')!!}





</body>

</html>