<?php

namespace App\Http\Controllers;
// namespace App\Http\Controllers\Session;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    // public function login()
    // {
    //     return view('login', [
    //         'title' => 'login',
    //     ]);
    // }

    // public function loginAction(Request $request)
    // {
    //     $scredentials = $request->validate([
    //         'username' => 'required|max:50',
    //         'password' => 'required|min:8',

    //     ]);
    //     if (Auth::attempt($scredentials)) {
    //         request()->session()->regenerate();
    //         return redirect('/dashboard')->with('success', 'you have been logged in!');
    //     } else {
    //         return redirect('/login')->with('error');
    //     }
    // }
    //
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login',[
            'title' => 'login'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function authenticate(Request $request)
    {
        $scredentials = $request->validate([
            'username' => 'required|max:50',
            'password' => 'required|min:8',

        ]);

        if(Auth::attempt($scredentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');

            return back()->withErrors([
                'email'=> 'email tidak cocok'
            ])->onlyInput('email');
        }
    }

    public function logoutAction(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        return redirect()->intended('login')->with('success', 'Berhasil logout!');
    }

}
