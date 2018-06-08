<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users/logout','Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('admin')->group(function ()
{
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset',  'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'Auth\AdminForgotPasswordController@showResetFrom')->name('admin.password.reset');

    /*ROUTE ADMINISTRADORES*/
    Route::get('/cadministrador','AdminController@homeAdministrador')->name('admin.aread');
    Route::get('/creadministrador','AdminController@cAdministrador')->name('admin.acreate');
    Route::get('/xadministrador/edit/{id}','AdminController@cAdministradorEdit')->name('admin.aedit');
    Route::get('/xadministrador/eliminar/{id}','AdminController@cAdministradorDelete')->name('admin.adelete');
    Route::resource('/xadministrador','cAdministradorController');

    /*ROUTE DOCENTES*/
    Route::get('/cdocente','AdminController@homeDocente')->name('admin.dread');
    Route::get('/credocente','AdminController@cDocente')->name('admin.dcreate');
    Route::get('/xdocente/edit/{id}','AdminController@cDocenteEdit')->name('admin.dedit');
    Route::get('/xdocente/eliminar/{id}','AdminController@cDocenteDelete')->name('admin.ddelete');
    Route::resource('/xdocente','cDocenteController');

    /*ROUTE TUTORES*/

    Route::get('/ctutor','AdminController@homeTutor')->name('admin.tread');
    Route::get('/cretutor','AdminController@cTutor')->name('admin.tcreate');
    Route::get('/xtutor/edit/{id}','AdminController@cTutorEdit')->name('admin.tedit');
    Route::get('/xtutor/eliminar/{id}','AdminController@cTutorDelete')->name('admin.tdelete');
    Route::resource('/xtutor','cTutorController');

    /*ROUTE ESTUDIANTES*/

    Route::get('/cestudiante','AdminController@homeEstudiante')->name('admin.eread');
    Route::get('/creestudiante','AdminController@cEstudiante')->name('admin.ecreate');
    Route::get('/xestudiante/edit/{id}','AdminController@cEstudianteEdit')->name('admin.eedit');
    Route::get('/xestudiante/eliminar/{id}','AdminController@cEstudianteDelete')->name('admin.edelete');
    Route::resource('/xestudiante','cEstudianteController');

    /*ROUTE CURSOS*/
    Route::get('/ccurso','AdminController@homeCurso')->name('admin.cread');
    Route::get('/crecurso','AdminController@cCurso')->name('admin.ccreate');
    Route::get('/xcurso/edit/{id}','AdminController@cCursoEdit')->name('admin.cedit');
    Route::get('/xcurso/eliminar/{id}','AdminController@cCursoDelete')->name('admin.cdelete');
    Route::resource('/xcurso','cCursoController');

    /*ROUTE SALONES*/
    Route::get('/csalon','AdminController@homeSalon')->name('admin.sread');
    Route::get('/cresalon','AdminController@cSalon')->name('admin.screate');
    Route::get('/xsalon/edit/{id}','AdminController@cSalonEdit')->name('admin.sedit');
    Route::get('/xsalon/eliminar/{id}','AdminController@cSalonDelete')->name('admin.sdelete');
    Route::resource('/xsalon','cSalonController');

});

Route::prefix('docente')->group(function ()
{
    Route::get('/login', 'Auth\DocenteLoginController@showLoginForm')->name('docente.login');
    Route::post('/login', 'Auth\DocenteLoginController@login')->name('docente.login.submit');
    Route::get('/', 'DocenteController@index')->name('docente.dashboard');
    Route::get('/logout', 'Auth\DocenteLoginController@logout')->name('docente.logout');

    Route::post('/password/email', 'Auth\DocenteForgotPasswordController@sendResetLinkEmail')->name('docente.password.email');
    Route::get('/password/reset',  'Auth\DocenteForgotPasswordController@showLinkRequestForm')->name('docente.password.request');
    Route::post('/password/reset', 'Auth\DocenteResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'Auth\DocenteForgotPasswordController@showResetFrom')->name('docente.password.reset');

    Route::get('/msalon', 'DocenteController@dSalon')->name('docente.sread');

});

Route::prefix('tutor')->group(function ()
{
    Route::get('/login', 'Auth\TutorLoginController@showLoginForm')->name('tutor.login');
    Route::post('/login', 'Auth\TutorLoginController@login')->name('tutor.login.submit');
    Route::get('/', 'TutorController@index')->name('tutor.dashboard');
    Route::get('/logout', 'Auth\TutorLoginController@logout')->name('tutor.logout');

    Route::post('/password/email', 'Auth\TutorForgotPasswordController@sendResetLinkEmail')->name('tutor.password.email');
    Route::get('/password/reset',  'Auth\TutorForgotPasswordController@showLinkRequestForm')->name('tutor.password.request');
    Route::post('/password/reset', 'Auth\TutorResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'Auth\TutorForgotPasswordController@showResetFrom')->name('tutor.password.reset');


    Route::get('/iestudiante','tTutorController@index')->name('tutor.eread');



});



Route::get('/', function () {
    return view('welcome');
});
