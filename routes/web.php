<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Return_;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landing');
});
Route::get('/category', function () {
    return view('admin.category.category');
});
Route::get('/bookmark', function () {
    return view('page.bookmark');
});
Route::get('/book', function () {
    return view('page.book');
});
Route::get('/book/detail', function () {
    return view('admin.books.books-detail');
});
Route::get('/review', function () {
    return view('page.review');
});

// Route::post('register')

Route::get('/register', [RegisterController::class,'register']);
Route::post('/register', [RegisterController::class,'registerAction']);
Route::get('/login', [LoginController::class,'login']);
Route::post('/login', [LoginController::class,'loginAction']);
Route::get('/dashboard',[DashboardController::class, 'dashboardAdmin']);

