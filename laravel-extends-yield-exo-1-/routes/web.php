<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $page = 'Welcome';
    return view('welcome', compact('page'));
})->name('welcome');

Route::get('/about', function () {
    $page = 'About';
    return view('about', compact('page'));
})->name('about');

Route::get('/service', function () {
    $page = 'Service';
    return view('services', compact('page'));
})->name('service');