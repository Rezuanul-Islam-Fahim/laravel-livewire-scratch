<?php

namespace App\Livewire;

use App\Livewire\Forms\ArticleForm;
use App\Models\Article;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;

#[Title('Update article')]
class ArticleEdit extends AdminComponent
{
    public ArticleForm $form;

    public function mount(Article $article)
    {
        $this->form->setArticle($article);
    }

    public function update()
    {
        $this->form->update();

        session()->flash('status', 'Article editted successfully');

        $this->redirect(ArticleList::class, navigate: true);
    }

    public function render()
    {
        return view('livewire.article-edit');
    }
}
