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

Route::get('/', [LoginController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
Route::get('/signup', [SignupController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/delete', [DeleteController::class, 'index']);
Route::get('/borrow', [BorrowController::class, 'index']);
Route::get('/list', [ListController::class, 'index']);
Route::get('/book', [BukuController::class, 'index']);
Route::get('/book/{slug:judul_buku}', [BukuController::class, 'checkout']);
Route::get('/history', [HistoryController::class, 'index']);
