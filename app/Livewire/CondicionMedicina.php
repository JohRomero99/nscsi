<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\condicionMedica;

class CondicionMedicina extends Component
{
    public $contadorCondicionMedica = 1;

    public function incrementarCondicionMedica(){

        $this->contadorCondicionMedica++;

    }

    public function disminuirCondicionMedica(){

        if($this->contadorCondicionMedica > 1){
            $this->contadorCondicionMedica--;
        }

    }

    public function render()
    {
        // Obtengo todos los datos registrados en la tabla "condicionMedica".
        $condicionMedica = condicionMedica::all();

        return view('livewire.condicion-medicina', compact('condicionMedica'));
    }
}
