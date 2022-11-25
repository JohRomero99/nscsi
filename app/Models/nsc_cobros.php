<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nsc_cobros extends Model
{
    use HasFactory;
    
    protected $guarded = [];
    protected $table = "nsc_cobros";

    // Relacion de nsc_cobro a estado de cuenta.
    public function estado_cuenta(){

        return $this->belongsto(cob_estado_cuenta::class,'estado_cuenta_id');

    }

    //Relacion de nsc_cobro a voucher.
    public function voucher(){

        return $this->belongsTo(cob_voucher::class,'voucher_id');
        
    }
}
