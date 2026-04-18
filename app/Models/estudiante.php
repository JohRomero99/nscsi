<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class estudiante extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $table = 'estudiante';

    public function persona(){

        return $this->belongsTo(persona::class);

    }

    public function estudianteRepresentante(){

        return $this->hasOne(estudianteRepresentante::class);

    }

    public function estudiantePension(){

        return $this->hasOne(estudiantePension::class);

    }

    public function anioAcademico(){

        return $this->belongsTo(anioAcademico::class);

    }

    public function cobroDetalle(){

        return $this->hasMany(cobroDetalle::class);
        
    }

    public function getMesesMoraReal(){

        //$hoy = now();
        $hoy = now()->addMonths(10);

        $cobros = $this->estudiantePension->cobroDetalle;

        return $cobros->filter(function ($cobro) use ($hoy) {
            return $cobro->fecha_vencimiento < $hoy 
                && $cobro->getSaldo() > 0;
        })->count();
    }

}
