<?php

use App\Http\Controllers\BatimentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('partials.welcome');
});

Route::get('/batiments', [BatimentController::class, 'index']);
Route::post('/batiments/{id}/delete', [BatimentController::class, 'destroy']);

Route::get('/eleves', function () {
    return view('partials.eleves');
});

Route::get('/formations', function () {
    return view('partials.formations');
});