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

    // //Relación uno a uno
    // public function codigo(){
    //     return this->hasone('\App\Models\Codigo','estudiante');
    // }
    public function persona(){

        return $this->belongsTo(Persona::class, 'persona_id');

    }
    public function representantes(){

        return $this->belongsToMany(Representante::class, 'nsc_estudiante_representante')->withPivot('parentesco_id', 'representacion_legal', 'estado');
    }

    public function parentesco(){

        return $this->belongsToMany(Parentesco::class, 'nsc_estudiante_representante')->withPivot('parentesco_id', 'representacion_legal', 'estado');
    
    }


   
}

