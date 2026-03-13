<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Title('Login')]
class Login extends Component
{
    #[Validate('required|email')]
    public $email;

    #[Validate('required')]
    public $password;

    public $errorMessage = '';

    public function authenticate()
    {
        $this->validate();

        $valid = Auth::attempt([
            'email' => $this->email,
            'password' => $this->password
        ]);

        if ($valid) {
            $this->redirectIntended('dashboard');
        } else {
            $this->errorMessage = 'Incorrect Email or Password';
        }
    }

    public function render()
    {
        return view('livewire.login');
    }
}
