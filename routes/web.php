<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\BorrowingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ReviewController;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardAdminController;
use App\Models\Borrowing;
use App\Models\Category;

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
// Route::get('/login', function () {
//     return view('login');
// });


//route category
// Route::get('/category', function (){
//     return view('users.categories.category', [
//         'title' => 'Dashboard LibyLine',
//         'active' => 'category'
//     ]);
// });
Route::resource('/adminCategory',CategoryController::class);

Route::get('/category',[CategoryController::class, 'categoryUser']);


//route bookmarks
Route::resource('bookmark', BookmarkController::class)->middleware('user');

//route books
 Route::resource('/adminBook',BookController::class);
 Route::get('/book',[BookController::class,'bookUser']);
//route review
Route::resource('/review',ReviewController::class);


//route borrowing
Route::resource('/adminBorrowing', BorrowingController::class);
Route::get('/borrowingUser',[BorrowingController::class,'userBorrowing']);
Route::get('/cetak', [BorrowingController::class, 'print']);
// Route::get('/borrowingUser', [BorrowingController::class,'storeUser']);
// Route::get('', [BorrowingController::class,'']);

// Route register
Route::get('register',[RegisterController::class,'index']);
Route::post('register',[RegisterController::class,'store']);

//Route login
Route::get('login',[LoginController::class,'index']);
Route::post('/login',[LoginController::class,'authenticate']);
Route::get('/logout', [LoginController::class,'logoutAction']);

//route dashboard
Route::get('dashboard',[DashboardController::class, 'dashboard']);
