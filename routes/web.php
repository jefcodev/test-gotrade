<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EstaController;
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

Route::view('/', 'login');
Route::view('/welcome', 'welcome')->name('index');


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');



Route::get('/dashboard', function () {
    return view('index');
})->name('dashboard');


Route::get('/establecimiento', [EstaController::class, 'create'])->name('establecimiento');
Route::post('/establecimiento', [EstaController::class, 'store'])->name('establecimiento.store');

