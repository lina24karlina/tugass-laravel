<?php

use App\Http\RelasiControllers;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\RelasiController;
use App\Http\Controllers\RumahController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\SekolahController;
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
Route::get('/products/{id}/edit', [StoreController::class, 'edit']);
Route::put('/products/{id}', [StoreController::class, 'update']);
Route::delete('/products/{id}', [StoreController::class, 'destroy']);
Route::get('/input', [StoreController::class, 'input']);
Route::post('/create', [StoreController::class, 'store']);
Route::get('/ktp', [RelasiController::class, 'index']);
Route::get('/pengguna/create', [RelasiController::class, 'create']);
Route::post('/pengguna/store', [RelasiController::class, 'store']);
Route::get('/school', [SchoolController::class, 'index']);
Route::get('/sekolah', [SekolahController::class, 'index']);
Route::get('/generate-pdf', [PdfController::class, 'generatePDF']);
Route::get('/stream-pdf', [PdfController::class, 'streamPDF']);
