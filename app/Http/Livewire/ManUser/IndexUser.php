<?php

namespace App\Http\Livewire\ManUser;

use App\Models\ManUser;
use Livewire\Component;

class IndexUser extends Component
{
    public function render()
    {
        $usuarios = ManUser::all();
        return view('livewire.man-user.index-user',compact('usuarios'));
    }
}
