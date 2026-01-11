<?php

namespace App\Livewire;

use App\Models\Greeting;
use Livewire\Component;

class Greeter extends Component
{
    public $person = '';
    public $greeting = '';
    public $greetings = [];
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
    public function mount()
    {
        $this->greetings = Greeting::all();
    }

    public function updated($name, $value)
    {
        if ($name == 'person') {
            $this->person = strtolower($value);
        }
    }

    // public function updatedPerson($value)
    // {
    //     $this->person = strtolower($value);
    // }

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
