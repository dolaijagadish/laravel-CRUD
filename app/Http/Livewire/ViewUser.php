<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class ViewUser extends Component
{
    public $clickCount = 0;

    public $users;

    public function viewuser()
    {
        $this->users = User::all();
        $this->clickCount++;
    }
    public function render()
    {
        return view('livewire.view-user');
    }

}