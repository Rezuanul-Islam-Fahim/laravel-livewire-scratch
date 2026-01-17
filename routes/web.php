<?php

use App\Livewire\ArticleIndex;
use App\Livewire\ArticlePage;
use Illuminate\Support\Facades\Route;

Route::get('/', ArticleIndex::class);
Route::get('/articles/{article}', ArticlePage::class);
