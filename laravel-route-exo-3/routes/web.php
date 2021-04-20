<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about/{var1}', function($var1){
    return view('pages/about', compact('var1'));
});

Route::get('/contact/{prenom}/{nom}/{tel}', function($prenom, $nom, $tel){
    return view('pages/contact', compact('prenom','nom','tel'));
});