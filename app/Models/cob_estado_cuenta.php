<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cob_estado_cuenta extends Model
{
    use HasFactory;

    protected $table = "cob_estado_cuenta";

    public function cob_cobro(){

        return $this->belongsto(cob_concepto_cobro::class,'concepto_cobro_id');

    }

    // Relacion de estado de cuenta a nsc_cobro.
    public function cobro(){

        return $this->hasMany(nsc_cobros::class,'estado_cuenta_id');

    }


}

