<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AyMAcademicoAspirante extends Model
{
    protected $table = 'aym_academico_aspirante';
    protected $guarded = [];

        public function persona()
        {
            return $this->belongsTo(Persona::class, 'persona_id');
        }
        public function institucion(){
            return $this->belongsTo(AyMInstitucionesEducativas::class, 'institucion_id');
        }
        
    
}
