<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\RumahController;
use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//return view('welcome');
//});

Route::get('/create', function () {
    return view('store');
});


//Route::get('/rumah', [RumahController::class, "index"]);

//Route::get('/book', [BookController::class, 'index']);

//Route::get('/home', [RumahController::class, 'index']); // Untuk menampilkan form
//Route::post('/home', [RumahController::class, 'submit']); // Untuk mengirim form
//Route::get('/create', [StoreController::class, 'store']);
Route::get('/show', [StoreController::class, 'show']);
