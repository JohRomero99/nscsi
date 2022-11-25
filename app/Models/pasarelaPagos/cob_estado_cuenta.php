<?php

namespace App\Models\pasarelaPagos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cob_estado_cuenta extends Model
{
    use HasFactory;

    protected $table = "cob_estado_cuenta";

    public function cob_cobro(){
        return $this->belongsto('App\Models\pasarelaPagos\cob_concepto_cobro','id');
    }
    
}

