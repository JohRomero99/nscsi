<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    //use HasFactory;
    
    protected $table = 'nsc_estudiante';
    protected $guarded = [];
    /*protected $fillable = [
        'id',
        'persona_id',
        'apellido_paterno',
        'apellido_materno',
        'primer_nombre',
        'segundo_nombre',
        'anio_academico',
        'fecha_nacimiento',
        'estado',
        'created_at',
        'updated_at'
    ];*/

    public function persona(){

        return $this->belongsTo(Persona::class, 'persona_id');

    }
    public function representantes(){

        return $this->belongsToMany(Representante::class, 'nsc_estudiante_representante')->withPivot('parentesco_id', 'representacion_legal', 'estado');
    }

    public function parentesco(){

        return $this->belongsToMany(Parentesco::class, 'nsc_estudiante_representante')->withPivot('parentesco_id', 'representacion_legal', 'estado');
    
    }

    // Relacion de estudiante a estado de cuenta
    public function estado_cuenta(){

        return $this->hasMany(cob_estado_cuenta::class);
    
    }   
}

