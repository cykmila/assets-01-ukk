<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BorrowingController extends Controller
{
    public function index(){
        return view('admin.borrowings.adminBorrowing',[
            'title' => 'Dashboard LibyLine',
            'active' => 'borrowing'
        ]);
    }
}
