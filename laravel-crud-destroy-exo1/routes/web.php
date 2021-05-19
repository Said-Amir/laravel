<?php

use App\Http\Controllers\PersonneController;
use Illuminate\Support\Facades\Route;

Route::get('/user', [PersonneController::class, "index"]); 
Route::post('/user/{id}/delete', [PersonneController::class, "destroy"]);