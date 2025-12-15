<?php

namespace App\Livewire;

use Livewire\Component;

class Medicamentos extends Component
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
        return view('livewire.medicamentos');
    }
}
