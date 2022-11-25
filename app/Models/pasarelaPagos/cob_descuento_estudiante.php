<?php

namespace App\Models\pasarelaPagos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cob_descuento_estudiante extends Model
{
    use HasFactory;

    protected $table = "cob_descuento_estudiante";

    public function descripcion(){
        return $this->belongsto('App\Models\pasarelaPagos\cob_descripcion_descuento_estudiante');
    }
}