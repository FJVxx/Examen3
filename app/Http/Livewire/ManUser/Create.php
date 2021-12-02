<?php

namespace App\Http\Livewire\ManUser;

use App\Models\ManUser;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    public ManUser $us;
    public $foto; 

    public function mount(){
        $this->us = new ManUser();
    }

    public function render()
    {
        return view('livewire.man-user.create');

    }
    public function crear()
    {
        $this->validate();
        if( $this->foto != null){
            $this->us->foto = Storage::disk('public')->put('images/manuser', $this->foto);
        }
        $this->us->save();
        return redirect(route('man-user.index-user'));

    }

    protected function rules(){
        return RulesUsuarios::reglas();
    }
}
