<?php

namespace App\Livewire;

use Livewire\Component;

class Greeter extends Component
{
    public $person = '';
    public $greeting = '';
    public $greetingText = '';

    public function changeGreetingText()
    {
        $this->reset('greetingText');

        // $this->validate();

        $this->validate([
            'person' => 'required|min:2'
        ]);

        $this->greetingText = "$this->greeting, $this->person!";
    }

    // public function rules()
    // {
    //     return [
    //         'person' => 'required|min:2'
    //     ];
    // }

    public function render()
    {
        return view('livewire.greeter');
    }
}
