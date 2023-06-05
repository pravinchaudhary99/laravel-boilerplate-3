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

Route::get('servies/1',[Servies_1::class,'index'])->name('servies.1');
Route::get('servies/2',[Servies_2::class,'index'])->name('servies.2');
Route::get('slider/1',[sliderController::class,'roomindex'])->name('slider.1');
Route::get('slider/2',[sliderController::class,'sliceindex'])->name('slider.2');
Route::get('slider/3',[sliderController::class,'verticalindex'])->name('slider.3');
Route::get('slider/4',[sliderController::class,'veloindex'])->name('slider.4');
Route::get('slider/5',[sliderController::class,'synchronizedindex'])->name('slider.5');
Route::get('slider/6',[sliderController::class,'splitindex'])->name('slider.6');

Route::get('login',[LoginUser::class,'index'])->name('login');
Route::get('register',[RegisterUser::class,'index'])->name('register');
