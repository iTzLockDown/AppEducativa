<?php

namespace ProyectoAppEducativa\Http\Controllers\Auth;

use Illuminate\Http\Request;
use ProyectoAppEducativa\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Auth;

class TutorLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:tutor', ['except'=>['logout']]);
    }

    public function showLoginForm()
    {
        return view('auth.tutor-login');
    }

    public function login(Request $request)
    {
        $this->validate($request,
            [
                'email' => 'required|email',
                'password'=>'required|min:8'
            ]);


        if(Auth::guard('tutor')->attempt(['email'=>$request->email,'password'=>$request->password], $request->remember))
        {
            return redirect()->intended(route('tutor.dashboard'));
        }
        return redirect()->back()->withInput($request->only('email','remember'));

    }
    public function logout(Request $request)
    {
        Auth::guard('tutor')->logout();
        return \redirect('/');
    }

}
