<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('search/article', [PublicController::class, 'searchArticles'])->name('article.search');

Route::post('lingua/{lang}', [PublicController::class, 'setLanguage'])->name('setLocale');

// Articles

Route::get('article/index', [ArticleController::class, 'index'])->name('article.index');

Route::get('article/create', [ArticleController::class, 'create'])->name('article.create');

Route::get('article/show/{article}', [ArticleController::class, 'show'])->name('article.show');

Route::get('article/category/{category}', [ArticleController::class, 'byCategory'])->name('article.byCategory');

// Revisor

Route::get('revisor/index', [RevisorController::class, 'index'])->middleware('isRevisor')->name('revisor.index');

Route::patch('revisor/accept/{article}', [RevisorController::class, 'accept'])->name('revisor.accept');

Route::patch('revisor/reject/{article}', [RevisorController::class, 'reject'])->name('revisor.reject');

Route::patch('/revisor/undo/{article}', [RevisorController::class, 'undo'])->name('revisor.undo');

Route::get('revisor/request', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('revisor.request');

// Route::get('revisor/make/{user}', [RevisorController::class, 'makeRevisor'])->middleware('isRevisor')->name('revisor.make');
Route::get('revisor/make/{user}', [RevisorController::class, 'makeRevisor'])->name('revisor.make');
