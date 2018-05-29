<?php

namespace ProyectoAppEducativa\Http\Controllers\Auth;

use ProyectoAppEducativa\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Auth;
use Password;

class DocenteResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    protected function guard()
    {
        return Auth::guard('docente');
    }


    protected function broker()
    {
        return Password::broker('docentes');
    }

    public function showResetForm(Request $request, $token = null)
    {
        return view('auth.password.reset-docente')->with(
            ['token'=>$token, 'email' => $request->email]
        );
    }
}
