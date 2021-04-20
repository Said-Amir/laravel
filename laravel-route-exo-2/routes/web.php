<?php

use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    return view('welcome');
});

// Route::get('/{var1}/{var2}', function ($var1,$var2) {
//     return view('welcome', compact('var1', 'var2'));
// });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
