<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;


// Route::get('/', function () {
//     return view('underconstruction');
// });
Route::get('/under', function () {
    return view('underconstruction');
});

// Route::get('/home', function () {
//     return view('home');
// });
Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/custom-designs', [HomeController::class, 'index']); 
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');