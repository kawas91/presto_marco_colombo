<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

// Articles
Route::get('article/index', [ArticleController::class, 'index'])->name('article.index');

Route::get('article/create', [ArticleController::class, 'create'])->name('article.create');

Route::get('article/show/{article}', [ArticleController::class, 'show'])->name('article.show');

Route::get('article/category/{category}', [ArticleController::class, 'byCategory'])->name('article.byCategory');
