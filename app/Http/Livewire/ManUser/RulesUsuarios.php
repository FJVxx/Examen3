<?php

namespace App\Http\Livewire\ManUser;

class RulesUsuarios{

    public static function reglas(){

        return
        [
            'us.nombre_usuario' => 'required|string',
            'us.email' => 'required|string',
            'us.password' => 'required|string',
            'foto' => 'nullable|image'
        ];
    }
}