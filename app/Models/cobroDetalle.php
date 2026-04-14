<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cobroDetalle extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $table = 'cob_detalle';

    

    // Relación Pagos
    public function pagos(){

        return $this->hasMany(pagos::class);
    }

    // Total Pagado.
    public function getTotalPagado(){

        return $this->pagos->sum('monto');
    }

    // Monto Actual.
    public function getMontoActual(){

        $hoy = now();

        if ($hoy->lte($this->fecha_vencimiento)) {
            return $this->total_a_pagar; // con descuento
        }

        return $this->valor; // sin descuento
    }

    // Saldo Final.
    public function getSaldo(){

        return $this->getMontoActual() - $this->getTotalPagado();

    }

    // Estado automático.
    public function getEstado(){

        $pagado = $this->getTotalPagado();
        $total = $this->getMontoActual();

        if ($pagado >= $total) {
            return 'Pagado';
        }

        if ($pagado > 0) {
            return 'Parcial';
        }

        return 'Pendiente';
    }

}
