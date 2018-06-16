<?php

namespace ProyectoAppEducativa\Http\Controllers;

use Illuminate\Http\Request;
use ProyectoAppEducativa\tb_administrador;
use ProyectoAppEducativa\tb_cursos;
use ProyectoAppEducativa\tb_docente;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use ProyectoAppEducativa\tb_matricula;
use ProyectoAppEducativa\tb_salon;
use ProyectoAppEducativa\tb_tutor;
use ProyectoAppEducativa\User;


class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('iAdministrador\home');
    }

    public function homeDocente(Request $request)
    {
        $doc = tb_docente::Busqueda($request->get('nombre'))->orderBy('id', 'DESC')->paginate(5);
        return view('xDocente\principal', compact('doc'));
    }
    public function cDocente()
    {

        return view('xDocente\create');
    }


    public  function cDocenteEdit($id)
    {

        $e_docente =tb_docente::find($id);

        return view('xDocente.update',['docente'=>$e_docente]);
    }
    public  function cDocenteDelete($id)
    {

        $delete = tb_docente::find($id);
        $delete->delete();
        Session::flash('message', 'Docente eliminado exitosamente.!');
        return Redirect::route('admin.dread');
    }




    public function homeTutor(Request $request)
    {
        $tut = tb_tutor::Busqueda($request->get('nombre'))->orderBy('id', 'DESC')->paginate(5);
        return view('xTutor\principal', compact('tut'));
    }

    public function cTutor()
    {

        return view('xTutor\create');
    }

    public  function cTutorEdit($id)
    {

        $e_tutor =tb_tutor::find($id);

        return view('xTutor.update',['tutor'=>$e_tutor]);
    }

    public  function cTutorDelete($id)
    {

        $delete = tb_tutor::find($id);
        $delete->delete();
        Session::flash('message', 'Tutor eliminado exitosamente.!');
        return Redirect::route('admin.tread');
    }




    public function homeEstudiante(Request $request)
    {
        $est = User::Busqueda($request->get('nombre'))->orderBy('id', 'DESC')->paginate(5);
        return view('xEstudiante\principal', compact('est'));

    }

    public function cEstudiante()
    {
        $tutor = tb_tutor::pluck('documento','id');
        return view('xEstudiante\create', compact('tutor'));
    }

    public  function cEstudianteEdit($id)
    {

        $e_estudiante =User::find($id);
        $tutor = tb_tutor::pluck('documento','id');

        return view('xEstudiante.update',['estudiante'=>$e_estudiante], compact('tutor'));
    }

    public  function cEstudianteDelete($id)
    {

        $delete = User::find($id);
        $delete->delete();
        Session::flash('message', 'Estudiante eliminado exitosamente.!');
        return Redirect::route('admin.eread');
    }




    public function homeCurso(Request $request)
    {
        $curs = tb_cursos::Busqueda($request->get('nombre'))->orderBy('id', 'DESC')->paginate(5);
        return view('xCurso\principal', compact('curs'));
    }

    public function cCurso()
    {
        return view('xCurso\create');
    }

    public  function cCursoEdit($id)
    {

        $e_curso =tb_cursos::find($id);


        return view('xCurso.update',['curso'=>$e_curso]);
    }

    public  function cCursoDelete($id)
    {

        $delete = tb_cursos::find($id);
        $delete->delete();
        Session::flash('message', 'Curso eliminado exitosamente.!');
        return Redirect::route('admin.cread');
    }








    public function homeSalon(Request $request)
    {
        $salon = tb_salon::Busqueda($request->get('nombre'))->orderBy('id', 'DESC')->paginate(5);
        $doc = tb_docente::all();
        $curso = tb_cursos::all();
        return view('xSalon\principal', compact('salon', 'doc', 'curso'));
    }

    public function cSalon()
    {
        $curso = tb_cursos::pluck('nombre', 'id');
        $doc= tb_docente::pluck('documento', 'id');
        return view('xSalon\create', compact('curso', 'doc'));
    }

    public  function cSalonEdit($id)
    {

        $e_salon =tb_salon::find($id);
        $curso = tb_cursos::pluck('nombre', 'id');
        $doc= tb_docente::pluck('documento', 'id');

        return view('xSalon.update',['salon'=>$e_salon], compact('curso', 'doc'));
    }

    public  function cSalonDelete($id)
    {

        $delete = tb_salon::find($id);
        $delete->delete();
        Session::flash('message', 'Salon eliminado exitosamente.!');
        return Redirect::route('admin.sread');
    }





    public function homeAdministrador(Request $request)
    {
        $adm = tb_administrador::Busqueda($request->get('nombre'))->orderBy('id', 'DESC')->paginate(5);
        return view('xAdministrador\principal', compact('adm'));
    }

    public function cAdministrador()
    {
        return view('xAdministrador\create');
    }

    public  function cAdministradorEdit($id)
    {

        $e_administrador =tb_administrador::find($id);


        return view('xAdministrador.update',['administrador'=>$e_administrador]);
    }

    public  function cAdministradorDelete($id)
    {

        $delete = tb_administrador::find($id);
        $delete->delete();
        Session::flash('message', 'Administrador eliminado exitosamente.!');
        return Redirect::route('admin.aread');
    }

    public function homeMatricula($id)
    {
        $salon = tb_salon::find($id);
        $doc = tb_docente::all();
        $curso = tb_cursos::all();
        $matricula = tb_matricula::all();
        $estudiante = User::all();
        return view('xMatricula\principal', compact('matricula','salon', 'doc', 'curso', 'estudiante'));
    }
    public function homeMatricular($id)
    {
        $salon = tb_salon::find($id);
        $doc = tb_docente::all();
        $curso = tb_cursos::all();
        $matricula = tb_matricula::all();
        $estudiante = User::all();
        return view('xMatricula\matricular', compact('matricula','salon', 'doc', 'curso', 'estudiante'));
    }

    public function homeMatricularCre($id, $id2)
    {
        $cmatricula = new tb_matricula();
        $deg = $id.$id2;
        $cmatricula ->deg     = $deg;
        $cmatricula ->salon      = $id2;
        $cmatricula ->estudiantes     = $id;
        $cmatricula -> save();

        return Redirect::back()->with('message', 'Estudiante matriculado.');
    }
    public function homeMatricularDel($id)
    {
        $delete = tb_matricula::find($id);
        $delete->delete();
        return Redirect::back()->with('message', 'Estudiante desmatriculado.');
    }
}
