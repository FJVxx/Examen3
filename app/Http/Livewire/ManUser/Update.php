<?php

namespace App\Http\Livewire\ManUser;

use App\Models\ManUser;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;
    public ManUser $us;
    public $foto; 
    public function render()
    {
        return view('livewire.man-user.update');
    }
    public function update(){

        $this->validate();
        if($this->foto != null){
            if($this->us->foto != null){
                Storage::disk('public')->delete($this->us->foto);
            }
            $this->us->foto = Storage::disk('public')->put('images/manuser', $this->foto);
        }
        $this->us->save();
        return redirect(route('man-user.index-user'));

    }
    protected function rules(){
        return RulesUsuarios::reglas();
    }
}
