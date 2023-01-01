<?php

namespace App\Http\Livewire\Form;

use Livewire\Component;

class Registrasi extends Component
{
    public $nama;
    public $email;
    public $password;
    public $noHp;

    public function register(){
        $this->validate([
            'name' =>['required'],
            'email' => ['required', 'email' ],
            'password' => ['required', 'min:3'],
            'noHp' => ['required']
        ]);
    }
    public function render()
    {
        return view('livewire.form.registrasi');
    }
}