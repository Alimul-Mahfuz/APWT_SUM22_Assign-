<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;
use App\Http\Controllers\AuthController;

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
    return view('welcome');
})->name('home');
Route::get('/auth/login',[pageController::class,'login'])->name('login');
Route::post('/auth/login',[AuthController::class,'login'])->name('login');
Route::get('/auth/reg',[pageController::class,'reg'])->name('reg');
Route::post('/auth/reg',[AuthController::class,'reg'])->name('reg');
Route::get('/dashboard',[pageController::class,'dashboard'])->name('dashboard');
Route::get('/details/{id}',[pageController::class,'viewdet'])->name('viewdet');

