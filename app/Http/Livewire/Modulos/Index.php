<?php

namespace App\Http\Livewire\Modulos;

use Livewire\Component;
use App\Models\Modulos;

class Index extends Component
{
    // protected $listeners = ['render'];
    public function render()
    {
        $data = Modulos::all();
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        // die;

        return view('livewire.modulos.index')->with('data',$data); //enviar vistasl
    }
}
