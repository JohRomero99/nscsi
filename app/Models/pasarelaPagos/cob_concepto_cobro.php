<?php

namespace App\Models\pasarelaPagos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cob_concepto_cobro extends Model
{
    use HasFactory;

    protected $table = "cob_concepto_cobro";

    public function cob_cuentas(){
        return $this->hasMany('App\Models\pasarelaPagos\cob_estado_cuenta','concepto_cobro_id');
    }
} 