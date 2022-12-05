<?php

use App\Http\Controllers\frontend;
use App\Http\Controllers\login_res;
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

Route::get('/',[frontend::class, 'home'])->name('home');
Route::get('/about', [frontend::class,'about'])->name('about');
Route::get('/doctor', [frontend::class,'doctor'])->name('doctor');
Route::get('/login', [login_res::class,'index'])->name('login');
Route::post('/login', [login_res::class,'login'])->name('submit.login');
Route::post('/registration', [login_res::class,'registration'])->name('submit.registration');
Route::get('/logout', [login_res::class,'logout'])->name('logout');

