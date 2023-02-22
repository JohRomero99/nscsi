<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fichaMatriculacion extends Model
{
    use HasFactory;

    protected $table = 'nsc_ficha_matriculacion';
    protected $guarded = [];

    // Relacion estudiante representante hacia ficha de matriculación.
    public function estudianteRepresentante(){

        return $this->belongsTo(EstudianteRepresentante::class, 'estudiante_representante');

    }
}
