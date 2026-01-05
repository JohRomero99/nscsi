<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\tiposAlergia;

class Alergia extends Component
{

    public $contadorAlergia;

    public function render()
    {
        // Obtengo todos los datos registrados en la tabla "tipos Alergia".
        $tiposAlergia = tiposAlergia::all();

        return view('livewire.alergia',compact('tiposAlergia'));
    }
}
