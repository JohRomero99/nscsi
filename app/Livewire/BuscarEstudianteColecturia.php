<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\persona;

class BuscarEstudianteColecturia extends Component
{
    public $buscar = '';
    public $resultados = [];

    public function updatedBuscar(){

        if(strlen($this->buscar) < 2){
            $this->resultados = [];
            return;
        }

        $this->resultados = persona::where('cedula', 'like', "%{$this->buscar}%")
            ->orWhere('cedula', 'like', "%{$this->buscar}%")
            ->orWhere('primer_mombre', 'like', "%{$this->buscar}%")
            ->orWhere('segundo_nombre', 'like', "%{$this->buscar}%")
            ->orWhere('apellido_paterno', 'like', "%{$this->buscar}%")
            ->orWhere('apellido_materno', 'like', "%{$this->buscar}%")
            ->limit(10)
            ->get();
    }

    public function seleccionar($id){

        $est = persona::find($id);

        $this->buscar = $est->primer_nombre . ' ' . $est->segundo_nombre . ' ' . $est->apellido_paterno . ' ' . $est->apellido_materno;
        $this->resultados = [];

        // Aquí puedes emitir evento o guardar datos
        $this->dispatch('estudianteSeleccionado', $est->id);
    }


    public function render()
    {
        return view('livewire.buscar-estudiante-colecturia');
    }
}
