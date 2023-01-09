<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Representante;

class Persona extends Model
{
    use HasFactory;
    protected $table = 'nsc_persona';
    protected $guarded = [];
    
    public function lugarNacimiento(){

        return $this->belongsTo(LugarNacimiento::class, 'lugar_nacimiento_id');
    }

    public function nacionalidad(){

        return $this->belongsTo(Nacionalidad::class, 'nacionalidad_id');
    }

    public function estudiante(){

        return $this->hasOne(Estudiante::class);

    }

    public function academico(){

        return $this->hasOne(AyMAcademicoAspirante::class);

    }

    public function otrasInstituciones(){

        return $this->hasOne(AyMOtrasInstitucionesEducativas::class);

    }

    public function representante(){

        return $this->hasOne(Representante::class);

    }

    public function salud(){

        return $this->hasOne(SaludPersona::class);

    }

    // Relacion de uno a uno con User.
    public function user(){

        return $this->belongsTo(User::class);

    }


}
