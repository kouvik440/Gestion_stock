<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\CategoryController;

// 🟢 Page d'accueil
Route::get('/', function () {
    return view('welcome');
});

// 🟢 Routes des catégories
Route::resource('categories', CategoryController::class);

// 🟢 Routes des matériels
Route::resource('items', ItemController::class)->except(['show']);
// 🟢 Page d'accueil
Route::get('/', function () {
    return view('index');
});

Route::put('/items/{item}', [ItemController::class, 'update'])->name('items.update');
