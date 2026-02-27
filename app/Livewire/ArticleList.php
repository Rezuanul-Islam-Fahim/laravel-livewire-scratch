<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Attributes\Title;
use Livewire\WithPagination;

#[Title('Article List')]
class ArticleList extends AdminComponent
{
    use WithPagination;

    public $showPublishedOnly = false;

    public function delete(Article $article)
    {
        $article->delete();
    }

    public function showAll()
    {
        $this->showPublishedOnly = false;
        $this->resetPage(pageName: 'article-page');
    }

    public function showPublished()
    {
        $this->showPublishedOnly = true;
        $this->resetPage(pageName: 'article-page');
    }

    public function render()
    {
        $query = Article::query();

        if ($this->showPublishedOnly) {
            $query->where('published', '=', 1);
        }

        return view('livewire.article-list', [
            'articles' => $query->paginate(10, pageName: 'article-page'),
        ]);
    }
}
