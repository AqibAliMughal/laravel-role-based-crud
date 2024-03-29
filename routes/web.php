<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('index');
});

Route::view('/signup', 'forms.login');
Route::view('/login', 'forms.register');
// Route::get('/signup', )

Route::resource('user', UserController::class);
Route::get('/login', [AuthController::class, 'loginView'] )->name('login');
Route::post('/login', [AuthController::class, 'login'] )->name('login');
