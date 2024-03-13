<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Register extends Component
{
    public $birthdate = '';

    public $citizenship = '';

    public $city = '';

    public $email = '';

    public $firstname = '';

    public $password = '';

    public $phonenumber = '';

    public $postalcode = '';

    public $salutation = '';

    public $street = '';

    public $lastname = '';

    public function render()
    {
        return view('livewire.register');
    }

    public function save()
    {
        $validated = $this->validate([
            'birthdate' => 'required',
            'citizenship' => 'required',
            'city' => 'required',
            'email' => 'required',
            'firstname' => 'required',
            'password' => 'required',
            'phonenumber' => 'required',
            'postalcode' => 'required',
            'salutation' => 'required',
            'street' => 'required',
            'lastname' => 'required',
        ]);

        User::create([
            'birthdate' => $validated['birthdate'],
            'city' => $validated['city'],
            'citizenship' => $validated['citizenship'],
            'email' => $validated['email'],
            'password' => $validated['password'],
            'phonenumber' => $validated['phonenumber'],
            'postalcode' => $validated['postalcode'],
            'salutation' => $validated['salutation'],
            'street' => $validated['street'],
            'lastname' => $validated['lastname'],
            'name' => $validated['firstname'],
        ]);
    }
}
