<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\frecuenciaMedicamento;
use App\Models\dosisMedicamento;

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
        // Obtengo todos los datos registrados en la tabla "Dosis Medicamentos".
        $dosisMedicamento = dosisMedicamento::all();

        // Obtengo todos los datos registrados en la tabla "Frecuencia Medicamento".
        $frecuenciaMedicamento = frecuenciaMedicamento::all();

        return view('livewire.medicamentos', compact('dosisMedicamento','frecuenciaMedicamento'));
    }
}
