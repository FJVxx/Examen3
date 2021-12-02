<?php

namespace App\Http\Livewire\ManUser;

use App\Models\ManUser;
use Livewire\Component;

class UserView extends Component
{
    public ManUser $us;
    public function render()
    {
        return view('livewire.man-user.user-view');
    }
}
