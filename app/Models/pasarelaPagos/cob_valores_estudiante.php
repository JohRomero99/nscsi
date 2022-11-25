<?php

namespace App\Models\pasarelaPagos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cob_valores_estudiante extends Model
{
    use HasFactory;

    protected $table = "cob_estado_valores_estudiante";

    public function estado_cuenta(){
        return "";
    }
}

