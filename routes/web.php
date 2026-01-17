<?php

use App\Livewire\ArticleIndex;
use App\Livewire\ArticleList;
use App\Livewire\ArticlePage;
use App\Livewire\Dashboard;
use Illuminate\Support\Facades\Route;

Route::get('/', ArticleIndex::class);
Route::get('/articles/{article}', ArticlePage::class);
Route::get('/dashboard', Dashboard::class);
Route::get('/dashboard/articles', ArticleList::class);
