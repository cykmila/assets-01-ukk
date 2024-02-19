<?php

namespace App\Http\Controllers;
// namespace App\Http\Controllers\Session;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login()
    {
        return view('login', [
            'title' => 'login',
        ]);
    }

    public function loginAction(Request $request)
    {
        $scredentials = $request->validate([
            'username' => 'required|max:50',
            'password' => 'required|min:8',

        ]);
        if (Auth::attempt($scredentials)) {
            request()->session()->regenerate();
            return redirect('/dashboard')->with('success', 'you have been logged in!');
        } else {
            return redirect('/login')->with('error');
        }
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
