<?php

use App\Http\Controllers\EquipeController;
use App\Http\Controllers\JoueurController;
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

Route::get('/backoffice', function () {
    $current = 'backend';
    return view('backoffice.back', compact('current'));
});

Route::get('/', function () {
    $current = 'front';
    return view('front', compact('current'));
});

// Equipes
Route::resource('/equipes', EquipeController::class);

// Joueurs
Route::resource('/joueurs', JoueurController::class);