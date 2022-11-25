<?php

namespace App\Models\pasarelaPagos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cob_descripcion_descuento_estudiante extends Model
{
    use HasFactory;

    protected $table = "cob_descripcion_descuento_estudiante";

    public function descuento(){
        return $this->hasMany('App\Models\pasarelaPagos\cob_descuento_estudiante');
    }
    
}
