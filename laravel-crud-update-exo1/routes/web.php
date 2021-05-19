<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\PortfolioController;
use App\Models\Portfolio;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    $current = 'welcome';
    return view('welcome', compact('current'));
})->name('welcome');

//Articles
Route::get('/articles',[ArticleController::class, 'index'])->name('article');
Route::post('/articles/{id}/destroy', [ArticleController::class, 'destroy']);
Route::get('/articles/{id}/edit',[ArticleController::class, 'edit']);
Route::post('/articles/{id}/update', [ArticleController::class, 'update']);
Route::post('/articles/store', [ArticleController::class, 'store']);
Route::get('/articles/create', [ArticleController::class, "create"]);

//Entreprises
Route::get('/entreprises', [EntrepriseController::class, 'index'])->name('entreprise');
Route::post('/entreprises/{id}/destroy',[EntrepriseController::class, 'destroy']);
Route::get('/entreprises/{id}/edit', [EntrepriseController::class, 'edit']);
Route::post('/entreprises/{id}/update',[EntrepriseController::class, 'update']);
Route::get('/entreprises/create', [EntrepriseController::class, 'create']);
Route::post('/entreprises/store', [EntrepriseController::class, 'store']);


//portfolios 
Route::get('/portfolios', [PortfolioController::class, 'index'])->name('portfolio');
Route::post('/portfolios/{id}/destroy', [PortfolioController::class, 'destroy']);
Route::get('/portfolios/{id}/edit', [PortfolioController::class, 'edit']);
Route::post('/portfolios/{id}/update', [PortfolioController::class, 'update']);
Route::get('/portfolios/create', [PortfolioController::class, 'create']);
Route::post('/portfolios/store',[PortfolioController::class, 'store']);