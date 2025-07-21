<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
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
    return view('welcome');
})->name('welcome');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/login',function(){
    return view('login');
})->name('login');

Route::get('/register',function(){
    return view('signup');
})->name('register');


Route::post('/register', [userController::class, 'register'])->name('register');
Route::post('/login', [userController::class, 'login'])->name('login');
