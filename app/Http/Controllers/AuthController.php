<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{
    
    public function formLogin() {
        return view('auth.login');
    }

    public function login(Request $request) {
        $credentials = $request->only(['email','password']);
       
        if(Auth::attempt($credentials)) {
            
            $user = Auth::user();

            if($user->rol == 'admin') {
                return redirect('/empresas');
            }
            return redirect('/perfil');
        }
        dd("no puedes acceder");
    }

    public function logout() {
        Auth::logout();
        return redirect('/login');
    }

}
