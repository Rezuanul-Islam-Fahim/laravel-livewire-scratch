<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleSearch extends Component
{
    public $searchText = '';
    public $results = [];

    public function updatedSearchText($value)
    {
        $this->reset('results');

        $this->validate([
            'searchText' => 'required'
        ]);

        $searchTerm = "%$value%";
        $this->results = Article::where('title', 'LIKE', $searchTerm)->get();
    }

    public function clear()
    {
        $this->reset('results', 'searchText');
    }

    public function render()
    {
        return view('livewire.article-search');
    }
}
