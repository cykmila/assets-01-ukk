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
Route::get('category',[CategoryController::class,'index']);

//route bookmarks
Route::get('bookmark',[BookmarkController::class, 'index']);

//route books
Route::get('book',[BookController::class,'index'])->name('book.index');
Route::get('/book-create',[BookController::class,'create'])->name('book.create');
//route review
Route::get('review', [ReviewController::class,'index']);
// Route::get('review', [ReviewController::class,'index']);

//route borrowing
Route::get('borrowing',[BorrowingController::class,'index']);
// Route::get('/borrowing/create', function(){
//     return view('users.borrowings.borrowing-create', [
//         'title' => 'Dashboard-LibyLine',
//         'active' => 'borrowing'
//     ]);
// });
// Route::get('/borrowing/detail', function(){
//     return view('users.borrowings.borrowing-detail', [
//         'title' => 'Dashboard-LibyLine',
//         'active' => 'book'
//     ]);
// });

//route logout
// // Route::get('/logout',function(){
// //     return view('');
// // });

// //route admin-book
// Route::get('/book/admin', function(){
//     return view('admin.books.adminBook', [
//         'title' => 'Dashboard-LibyLine',
//         'active' => 'book/admin'
//     ]);
// });
// Route::get('/book/create/admin', function(){
//     return view('admin.books.adminBook-create',  [
//         'title' => 'Dashboard-LibyLine',
//         'active' => 'book/create/admin'
//     ]);
// });
// Route::get('/book/detail/admin', function(){
//     return view('admin.books.adminBook-detail',  [
//         'title' => 'Dashboard-LibyLine',
//         'active' => 'book/detail/admin'
//     ]);
// });
// Route::get('/book/edit/admin', function(){
//     return view('admin.books.adminBook-edit',  [
//         'title' => 'Dashboard-LibyLine',
//         'active' => 'book/edit/admin'
//     ]);
// });

//route admin-borrowing
// Route::get('/borrowing/admin', function(){
//     return view('admin.borrowings.adminBorrowing', [
//         'title' => 'Dashboard-LibyLine',
//         'active' => 'borrowing/admin'
//     ]);
// });
// Route::get('/borrowing/detail/admin', function(){
//     return view('admin.borrowings.adminBorrowing-detail', [
//         'title' => 'Dashboard-LibyLine',
//         'active' => 'borrowing/detail/admin'
//     ]);
// });
// Route::get('/borrowing/edit/admin', function(){
//     return view('admin.borrowings.adminBorrowing-edit', [
//         'title' => 'Dashboard-LibyLine',
//         'active' => 'borrowing/edit/admin'
//     ]);
// });

//route admin-category
// Route::get('/category/admin', function(){
//     return view('admin.categories.adminCategory', [
//         'title' => 'Dashboard-LibyLine',
//         'active' => 'category/admin'
//     ]);
// });
// Route::get('/category/edit/admin', function(){
//     return view('admin.categories.adminCategory-edit', [
//         'title' => 'Dashboard-LibyLine',
//         'active' => 'category/edit/admin'
//     ]);
// });
// Route::get('/category/create/admin', function(){
//     return view('admin.categories.adminCategory-create', [
//         'title' => 'Dashboard-LibyLine',
//         'active' => 'category/create/admin'
//     ]);
// });
// Route::get('/category/delete/admin', function(){
//     return view('admin.categories.adminCategory-delete', [
//         'title' => 'Dashboard-LibyLine',
//         'active' => 'category/delete/admin'
//     ]);
// });

// Route register
Route::get('register',[RegisterController::class,'index']);
Route::post('register',[RegisterController::class,'store']);
 
//Route login
Route::get('login',[LoginController::class,'index']);
Route::post('login',[LoginController::class,'authenticate']);
//route dashboard
Route::get('dashboard',[DashboardController::class, 'dashboard']);
