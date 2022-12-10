<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

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

Route::post('/login', function () {
    return view('login', [
        'title' => 'Login'
    ]);        
});

Route::post('/', function () {
    return view('login', [
        'title' => 'Login'
    ]);
});

Route::post('/signup', function () {
    return view('signup', [
        'title' => 'Sign Up'
    ]);
});

Route::get('/home', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});

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

Route::get('/list', function () {
    return view('list', [
        'title' => 'List'
    ]);
});

Route::get('/book', [BukuController::class, 'index']);

Route::get('/checkout', function () {
    return view('checkout', [
        'title' => 'Checkout'
    ]);
});

Route::get('/history', function () {
    return view('history', [
        'title' => 'History'
    ]);
});
