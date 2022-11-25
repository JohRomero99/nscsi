<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NscSeguroEstudiante extends Model
{
    protected $table = 'nsc_seguro_persona';
    protected $fillable = [
        'id',
        'estudiante_ci',
        'descripcion',
        'aseguradora',
        'telefono',
        'contacto_emergencia',
        'tipo_persona',
        'estado',
        'created_at',
        'updated_at'
    ];
}
