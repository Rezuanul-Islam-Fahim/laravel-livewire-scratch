<?php

namespace App\Livewire;

use App\Livewire\Forms\ArticleForm;
use App\Models\Article;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;

#[Title('New Article')]
class CreateArticle extends AdminComponent
{
    public ArticleForm $form;

    public function save()
    {
        $this->form->store();

        $this->redirectRoute('dashboard.articles.index', navigate: true);
    }

    public function render()
    {
        return view('livewire.create-article');
    }
}
