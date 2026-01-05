<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\tiposEnfermedadesHereditarias;
use App\Models\relacionFamiliar;

class HistorialPatologico extends Component
{
    public $contadorHistorialPatologico = 1;

    public function incrementarHistorialPatologico(){

        $this->contadorHistorialPatologico++;

    }

    public function disminuirHistorialPatologico(){

        if($this->contadorHistorialPatologico > 1){
            $this->contadorHistorialPatologico--;
        }

    }
    
    public function render()
    {
        // Obtengo todos los datos registrados en la tabla "relaciionFamiliar".
        $relacionFamiliar = relacionFamiliar::all();

        // Obtengo todos los datos registrados en la tabla "tipos de enfermedades hereditarias".
        $tipoEnfermedadesHereditarias =  tiposEnfermedadesHereditarias::all();

        return view('livewire.historial-patologico', compact('tipoEnfermedadesHereditarias','relacionFamiliar'));
    }
}
