<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstudianteRepresentante extends Model
{
    //use HasFactory;
    protected $table = 'nsc_estudiante_representante';
    protected $guarded = [];
    
    public function estudiante(){

        return $this->belongsTo(Estudiante::class, 'estudiante_id');
    }

    public function representante(){

        return $this->belongsTo(Representante::class, 'representante_id');
    }

    public function parentesco(){

        return $this->belongsTo(Parentesco::class, 'parentesco_id');
        
    }

}
