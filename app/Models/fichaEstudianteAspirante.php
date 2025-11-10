<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fichaEstudianteAspirante extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $table = 'ficha_estudiante_aspirante';

    // Esto convierte el JSON en array automáticamente.
    protected $casts = [
        'referencia_familiar' => 'array',
    ];

    public function transporteEscolar(){

        return $this->belongsTo(transporteEscolar::class);

    }
    
}
