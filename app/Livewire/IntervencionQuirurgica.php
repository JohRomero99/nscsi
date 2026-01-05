<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\tiposIntervencionesQuirurgicas;

class IntervencionQuirurgica extends Component
{
    public $contadorQuirurgica = 1;

    public function incrementarQuirurgica(){

        $this->contadorQuirurgica++;

    }

    public function disminuirQuirurgica(){

        if($this->contadorQuirurgica > 1){
            $this->contadorQuirurgica--;
        }

    }

    public function render()
    {
        // Obtengo todos los datos registrados en la tabla "tipos intervenciones quirurgicas".
        $tiposIntervencionesQuirurgicas = tiposIntervencionesQuirurgicas::all();

        return view('livewire.intervencion-quirurgica', compact('tiposIntervencionesQuirurgicas'));
    }
}
