<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\Auth\LoginUser;
use App\Http\Controllers\Auth\RegisterUser;
use App\Http\Controllers\Invoice\InvoicesController;
use App\Http\Controllers\Services\Servies_1;
use App\Http\Controllers\Services\Servies_2;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Sliders\sliderController;

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
Route::post('user-register',[RegisterUser::class,'create'])->name('user.register');
Route::post('user-login',[LoginUser::class,'login'])->name('user.login');
Route::get('user-view',[UserController::class,'index'])->name('user.view');

// Route::get('test',function(){
//     // $imageUrl = "https://images.pexels.com/photos/60597/dahlia-red-blossom-bloom-60597.jpeg"; // Replace with the URL of your image
//     $imageUrl = "https://images.pexels.com/photos/65894/peacock-pen-alluring-yet-lure-65894.jpeg?cs=srgb&amp;dl=pexels-pixabay-65894.jpg&amp;fm=jpg"; // Replace with the URL of your image

//     header("Content-Description: File Transfer");
//     header("Content-Type: application/octet-stream");
//     header("Content-Disposition: attachment; filename=image.jpg"); // Specify the desired file name for the downloaded image

//     readfile($imageUrl);
//     return true;
// });

Route::get('pdf/{id}',[PdfController::class,'pdfGenerator'])->name('pdf.download');

Route::get('invoice-invoice',[InvoicesController::class,'invoice'])->name('invoice.invoice');
Route::get('invoice-create',[InvoicesController::class,'index'])->name('invoice.index');
Route::post('invoice-create',[InvoicesController::class,'create'])->name('invoice.create');