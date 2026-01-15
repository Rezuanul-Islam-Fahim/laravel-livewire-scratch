<?php

use App\Livewire\ArticleSearch;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/search', ArticleSearch::class);
