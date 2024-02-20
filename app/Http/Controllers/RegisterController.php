<?php

namespace App\Http\Controllers;

// namespace App\Http\Controllers\Session;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


class RegisterController extends Controller
{

    // public function register()
    // {
    //     return view('register', [
    //         'title' => 'register',
    //     ]);
    // }
    // public function registerAction(Request $request)
    // { 
    //     // dd($request);
    //     $validateData = $request->validate([
    //         'username' => 'required|max:50',
    //         'password' => 'required|min:8',
    //         'email' => 'required|max:50',
    //         'name' => 'required|max:50',
    //         'phone' => 'required|max:13',
    //         'address' => 'required',
    //     ]);
    //     if ($validateData) {
    //         $validateData['password'] = Hash::make($validateData['password']);

    //         // User::create([

    //         // 'username' => $request->username,
    //         // 'password' => $request-> password,
    //         // 'email' => $request-> email,
    //         // 'name' => $request-> name,
    //         // 'phone' => $request-> phone,
    //         // 'address' => $request-> address,
    //         // ]);
    //         User::create($validateData);
    //         return redirect('/login');
    //     }
    //     return redirect('/register');
    // }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('register', [
            'title' => 'register',
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
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'username' => 'required|max:50',
            'password' => 'required|min:8',
            'email' => 'required|max:50',
            'name' => 'required|max:50',
            'phone' => 'required|max:13',
            'address' => 'required',
        ]);
        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);

        return redirect('/login')->with('success', 'berhasil register');
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
