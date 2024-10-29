<?php

use App\Http\Controllers\ContactController;
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
Route::get('/about', function () {
    return view('about');
});
Route::get('/service', function () {
    return view('services');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/quote', function () {
    return view('request-quote');
});
Route::post('/contact-process',[ContactController::class,'contactprocess'])->name('contact-process');
