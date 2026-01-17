<?php

namespace App\Livewire;

use Livewire\Attributes\Title;

#[Title('Article List')]
class ArticleList extends AdminComponent
{
    public function render()
    {
        return view('livewire.article-list');
    }
}
