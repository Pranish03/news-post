<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name("index");
Route::get('/category/{slug}', [PageController::class, 'category'])->name("category");
Route::get('/article/{slug}', [PageController::class, 'article'])->name("article");
