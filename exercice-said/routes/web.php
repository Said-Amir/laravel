<?php

use App\Http\Controllers\PersonnesController;
use Illuminate\Support\Facades\Route;

Route::get('personnes/', [PersonnesController::class, 'index']);
Route::post('personnes/{id}/delete', [PersonnesController::class, 'destroy']);