<?php

use App\Http\Controllers\BookController;
use App\Models\Book;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', function () {
    return view('login', [
        'title' => 'Log In',
        'user' => 'Muhammad Yusuf Habibie'
    ]);
});

Route::get('/home', [BookController::class, 'index']);

Route::get('/profile', function () {
    return view('profile', [
        'title' => 'Profile'
    ]);
});

Route::get('/borrow', function () {
    return view('borrow', [
        'title' => 'Borrowing'
    ]);
});

Route::get('/history', function () {
    return view('history', [
        'title' => 'History'
    ]);
});


//halaman daftar buku
Route::get('books/{slug}', [BookController::class, 'show']);