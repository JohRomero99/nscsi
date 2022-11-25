<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\cob_estado_cuenta;

class cob_concepto_cobro extends Model
{
    use HasFactory;

    protected $table = "cob_concepto_cobro";

    public function cob_cuentas(){

        return $this->hasMany(cob_estado_cuenta::class,'concepto_cobro_id');
        
    }
} 