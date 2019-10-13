<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function login(){
        return view('login');
    }

    public function home(){
        return view('home');
    }

    public function forgot(){
        return view('forgotpassword');
    }

    public function checkLogin(Request $request){
        $email = $request->input('email');
        $mensaje = 'El correo que has introducido es incorrecto';

        if(strcasecmp($email, 'pepe@gmail.com') === 0){
            return redirect('home')->withInput($request->except('password'));
        }
        else{
            return redirect('login')->with('mensaje', $mensaje);
        }
    }

    public function redirectToLogin(Request $request){
        return redirect('login')->with('mensaje', 'Recibirás un correo para recuperar tu contraseña.');
    }
}
