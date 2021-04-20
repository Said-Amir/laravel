<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    $razzouk = (object) [
        'prenom' => 'Iliass',
        'nom' => 'Razzouk'
    ];
    return view('index', compact('razzouk'));
});

Route::get('/contact/{salut}',function($salut){
    return view('contact', compact('salut'));
});