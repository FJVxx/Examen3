<?php

namespace App\Http\Livewire\ManUser;

use App\Models\ManUser;
use Livewire\Component;
use Livewire\WithPagination;

class View extends Component
{
    use WithPagination;
    protected $paginationTheme='bootstrap';
    public $search;
    public $cargando = false; 
    public function render()
    {
        $usuarios = ($this->cargando == true ) ? ManUser::where('nombre_usuario','LIKE','%'. $this->search . '%')
        ->orwhere('email','LIKE','%'. $this->search . '%')
        ->orwhere('password','LIKE','%'. $this->search . '%')
        ->paginate(4) : [];
        return view('livewire.man-user.view',compact('usuarios'));
    }
    public function updatingSearch(){
        $this->resetPage();
    }

    public function cargando(){
        $this->cargando = true;
    }
}