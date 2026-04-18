<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cobroDetalle extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $casts = [
    'fecha_vencimiento' => 'date',
    ];

    protected $table = 'cob_detalle';

    public function concepto(){

        return $this->belongsTo(concepto::class, 'cob_concepto_id');

    }

    public function estudiantePension(){

        return $this->belongsTo(estudiantePension::class, 'cob_estudiante_id');

    }

    public function pagos(){
        return $this->hasMany(pagos::class, 'cob_detalle_id');
    }

    public function getMesesMora(){

        $hoy = now();

        if ($hoy->lte($this->fecha_vencimiento)) {
            return 0;
        }

        // Diferencia en meses
        //$meses = $this->fecha_vencimiento->diffInMonths($hoy);

        return (int) $this->fecha_vencimiento->diffInMonths($hoy);

        // Si ya pasó al siguiente mes, contar mínimo 1
        if ($meses == 0) {
            return 1;
        }

        return $meses;
    }

    // Total Pagado
    public function getTotalPagado(){
        return $this->pagos()->sum('monto');
    }

    // Monto Actual
    public function getMontoActual(){
        
        //$hoy = now()->addMonth();
        $hoy = now();

        if ($hoy->lte($this->fecha_vencimiento)) {
            return $this->total_a_pagar; // con descuento
        }

        return $this->valor; // sin descuento
    }

    // Saldo
    public function getSaldo(){
        $total = $this->getMontoActual();
        $pagado = $this->pagos()->sum('monto');

        return $total - $pagado;
    }

    // Estado
    public function getEstado(){
        $pagado = $this->getTotalPagado();
        $total = $this->getMontoActual();

        if ($pagado == 0) return 'Pendiente';
        if ($pagado < $total) return 'Parcial';
        if ($pagado >= $total) return 'Pagado';

        return 'Pendiente';
    }

}
