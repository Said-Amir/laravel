<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function(){
    $prenom = 'Said';
    $nom = 'Maktabi';
    return view('welcome', compact('prenom', 'nom'));
})->name("pagePrincipale");

Route::get('/about', function(){
    $prenom = 'Liban';
    $nom = 'Mahad';
    return view('about', compact('prenom', 'nom'));
})->name("about");