<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }

    public function loginAction(Request $request){
        $credentials = $request->validate([
            'username' => ['required', 'string', 'max:255','alpha_num'],
            'password' => ['required'],    
        ]);

        if (Auth::attempt($credentials)) 
        {
            $request->session()->regenerate();
            // dd('berhasil login');
 
            return redirect()->intended('dashboard');
        }
        
        return back()->with('error', 'gagal login');    
    }
}
