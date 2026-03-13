<?php

use App\Livewire\ArticleEdit;
use App\Livewire\ArticleIndex;
use App\Livewire\ArticleList;
use App\Livewire\ArticlePage;
use App\Livewire\CreateArticle;
use App\Livewire\Dashboard;
use App\Livewire\Login;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', ArticleIndex::class)->name('home');
Route::get('/login', Login::class)->name('login');

Route::get('/articles/{article}', ArticlePage::class);

Route::middleware('auth')->group(function () {
    Route::get('/logout', function () {
        Auth::logout();

        return redirect()->route('home');
    });
    Route::get('/dashboard/articles', ArticleList::class)
        ->name('dashboard.articles.index'); //->lazy();
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/dashboard/articles/create', CreateArticle::class);
    Route::get('/dashboard/articles/{article}/edit', ArticleEdit::class);
});
