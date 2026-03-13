<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Attributes\Isolate;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Component;

#[Isolate]
class ArticleSearch extends Component
{
    #[Url(as: 'q', except: '', history: true)]
    public $searchText = '';

    #[On('clear:search-results')]
    public function clear()
    {
        $this->reset('searchText');
    }

    // protected function queryString()
    // {
    //     return [
    //         'searchText' => [
    //             'as' => 'q',
    //             'except' => '',
    //             'history' => true
    //         ]
    //     ];
    // }

    public function render()
    {
        return view('livewire.article-search', [
            'results' => Article::where('title', 'LIKE', "%{$this->searchText}%")->get()
        ]);
    }
}
