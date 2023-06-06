<?php

use App\Http\Controllers\Auth\LoginUser;
use App\Http\Controllers\Auth\RegisterUser;
use App\Http\Controllers\Services\Servies_1;
use App\Http\Controllers\Services\Servies_2;
use App\Http\Controllers\Sliders\sliderController;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('login',[LoginUser::class,'index'])->name('login');
Route::get('register',[RegisterUser::class,'index'])->name('register');
Route::post('user.register',[RegisterUser::class,'create'])->name('user.register');
