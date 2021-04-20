<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dateDuJour', function () {
    $toDay = date('d/m/y');
    $hour = date('H:i');
    return view('date', compact('toDay','hour'));
})->name('date');

Route::get('/fruits', function(){
    $fruits = [
        'pomme',
        'cerise',
        'poire',
        'fraise'
    ];
    return view('fruits', compact('fruits'));
})->name('fruits');