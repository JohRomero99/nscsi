<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\tipos_discapacidad;
use App\Models\porcentaje;

class BloqueDiscapacidad extends Component
{
    public string $discapacidad_si_no = '';
    public array $discapacidades = [];

    protected function rules()
    {
        return [
            'discapacidad_si_no' => 'required|in:Si,No',
            'discapacidades.*.tipo_discapacidad' => 'required|integer|gt:0',
            'discapacidades.*.procentaje_discapacidad' => 'required|integer|gt:0',
            'discapacidades.*.detalle_discapacidad' => 'required|max:500',
        ];
    }

    public function mount()
    {
        // Siempre empieza con un bloque
        $this->discapacidades[] = [
            'tipo_discapacidad' => 0,
            'procentaje_discapacidad' => 0,
            'detalle_discapacidad' => '',
        ];
    }

    public function agregarDiscapacidad()
    {
        $this->discapacidades[] = [
            'tipo_discapacidad' => 0,
            'procentaje_discapacidad' => 0,
            'detalle_discapacidad' => '',
        ];
    }

    public function quitarDiscapacidad($index)
    {
        unset($this->discapacidades[$index]);
        $this->discapacidades = array_values($this->discapacidades);
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
