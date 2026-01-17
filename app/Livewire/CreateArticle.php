<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;

#[Title('New Article')]
class CreateArticle extends AdminComponent
{
    #[Validate('required')]
    public $title;

    #[Validate('required')]
    public $content;

    public function save()
    {
        $validatedData = $this->validate();

        Article::create($validatedData);

        $this->redirect('/dashboard/articles', navigate: true);
    }

    public function render()
    {
        return view('livewire.create-article');
    }
}
