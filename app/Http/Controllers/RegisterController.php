<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Session;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class RegisterController extends Controller
{

    public function register(){
        return view('register');
    }
    public function registerAction(Request $request){
                $data = [
                'username' => $request->input('username'),
                'password' => $request->input('password'),
                'email' => $request->input('email'),
                'name' => $request->input('name'),
                'phone' => $request->input('phone'),
                'address' =>$request->input('address'),
                 ];
                 if(Auth::attempt($data)){
                    return redirect('/login');
                } else{
                    Session::flash('error', 'gagal register!');
                    return redirect('/register');
                }
                
             }   
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
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
