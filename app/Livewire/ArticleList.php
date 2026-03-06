<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Session;
use Livewire\Attributes\Title;
use Livewire\WithPagination;

#[Title('Article List')]
class ArticleList extends AdminComponent
{
    use WithPagination;

    #[Session]
    public $showPublishedOnly = false;

    #[Computed]
    public function articles()
    {
        $query = Article::query();

        if ($this->showPublishedOnly) {
            $query->where('published', '=', 1);
        }

        return $query->paginate(10, pageName: 'article-page');
    }

    public function delete(Article $article)
    {
        if ($this->articles->count() < 10) {
            throw new \Exception('Nope');
        }

        $article->delete();
        unset($this->articles);
        cache()->forget(key: 'published-count');
        $this->dispatch('publishedCountUpdated');
    }

    public function togglePublished(bool $showPublished)
    {
        $this->showPublishedOnly = $showPublished;
        $this->resetPage(pageName: 'article-page');
    }

    // public function render()
    // {
    //     return view('livewire.article-list');
    // }
}
