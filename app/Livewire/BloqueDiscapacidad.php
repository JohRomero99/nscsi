<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\tipos_discapacidad;
use App\Models\porcentaje;

class BloqueDiscapacidad extends Component
{
    public $contador = 1;

    public function incrementar(){

        $this->contador++;

    }

    public function disminuir(){

        if($this->contador > 1){
            $this->contador--;
        }

    }


    public function render()
    {
        // Obtengo todos los datos registrados en la tabla "tipos_discapacidad".
        $tiposDiscapacidad = tipos_discapacidad::all();

        // Obtengo todos los datos registrados en la tabla "porcentaje".
        $porcentaje = porcentaje::all();

        return view('livewire.bloque-discapacidad', compact('tiposDiscapacidad','porcentaje'));
    }
}
