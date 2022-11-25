<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\cob_descripcion_descuento_estudiante;

class cob_descuento_estudiante extends Model
{
    use HasFactory;

    protected $table = "cob_descuento_estudiante";

    public function descripcion(){
        return $this->belongsto(cob_descripcion_descuento_estudiante::class);
    }
}