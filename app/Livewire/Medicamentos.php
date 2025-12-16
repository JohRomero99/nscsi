<?php

namespace App\Livewire;

use Livewire\Component;

class Medicamentos extends Component
{

    public $contadorMedicamentos = 1;

    public function incrementarMedicamento(){

        $this->contadorMedicamentos++;

    }

    public function disminuirMedicamento(){

        if($this->contadorMedicamentos > 1){
            $this->contadorMedicamentos--;
        }

    }

    public function render()
    {
        return view('livewire.medicamentos');
    }
}
