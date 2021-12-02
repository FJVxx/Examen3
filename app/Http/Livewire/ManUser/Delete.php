<?php

namespace App\Http\Livewire\ManUser;

use App\Models\ManUser;
use Livewire\Component;

class Delete extends Component
{
    public ManUser $us;  
    public function render()
    {

        return view('livewire.man-user.delete');
    }
    public function delete(){

        $this->us->delete();
        return redirect(route('man-user.index-user'));
    }
}
 