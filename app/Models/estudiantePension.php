<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class estudiantePension extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $table = 'cob_estudiante';

    public function estudiante(){

        return $this->belongsTo(estudiante::class);

    }

    public function motivo(){

        return $this->belongsTo(motivo::class);

    }

    public function valorMatriculacion(){

        return $this->belongsTo(valorMatriculacion::class);

    }

    public function valorPension(){

        return $this->belongsTo(valorPension::class);

    }

    public function seguro(){

        return $this->belongsTo(seguro::class);

    }

    public function ambienteDigital(){

        return $this->belongsTo(ambienteDigital::class);

    }


}
