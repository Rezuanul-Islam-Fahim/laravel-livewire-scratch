<?php

use App\Livewire\ArticlePage;
use App\Livewire\ArticleSearch;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/search', ArticleSearch::class);

Route::get('/articles/{article}', ArticlePage::class);
