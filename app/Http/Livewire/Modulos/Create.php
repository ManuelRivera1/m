<?php

namespace App\Http\Livewire\Modulos;

use App\Models\Modulos;
use Livewire\Component;

class Create extends Component
{
    public $descripcion_modulo;
    public $ruta_modulo;
    #validar datos
    // protected $rules =[
    //     'descripcion_modulo'=>'required|max:100',
    //     'ruta_modulo'=>'required|max:100',
    // ];

    public function save()
    {
        $rules = $this->validate([
            'descripcion_modulo'=>'required|max:100',
            'ruta_modulo'=>'required|max:100',
        ]);
       Modulos::create(['descripcion_modulo' => $this->descripcion_modulo,
       'ruta_modulo' => $this->ruta_modulo]);
       $this->reset('descripcion_modulo','ruta_modulo');
       $this->emitTo('modulos.index','render'); //escuchar el evento de save y se manda al index.php
    }
    public function render()
    {
        return view('livewire.modulos.create');
    }
}
