<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NscDetalleDatosSalud extends Model
{
    //use HasFactory;
    protected $table = 'nsc_detalle_datos_salud';
    protected $guarded = [];
    public function saludPersona()
    {
        return $this->belongsTo(SaludPersona::class, 'salud_persona_id');
    }
}
