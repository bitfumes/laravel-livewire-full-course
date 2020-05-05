<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Logout extends Component
{
    public function logout()
    {
        Auth::logout();
        return redirect(route('login'));
    }

    public function render()
    {
        return view('livewire.logout');
    }
}
