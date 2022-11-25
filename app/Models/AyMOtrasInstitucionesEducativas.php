<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AyMOtrasInstitucionesEducativas extends Model
{
    use HasFactory;
    protected $table = 'aym_otras_instituciones_educativas';
    protected $guarded = [];

    public function persona(){
        return $this->belongsTo(Persona::class, 'persona_id');
    }


}
