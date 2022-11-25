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
    // protected $fillable = [
    //     'id',
    //     'cedula',
    //     'apellido_paterno',
    //     'apellido_materno',
    //     'primer_nombre',
    //     'segundo_nombre',
    //     'sexo',
    //     'fecha_nacimiento',
    //     'lugar_nacimiento_id',
    //     'nacionalidad_id',
    //     'telefono_celular',
    //     'telefono_domicilo',
    //     'correo',
    //     'estado',
    //     'scan_cedula',
    //     'created_at',
    //     'updated_at'
    // ];
    
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

    public function getFullName(){

        return "{$this->apellido_paterno} {$this->apellido_materno} {$this->primer_nombre} {$this->segundo_nombre}";

    }

}
