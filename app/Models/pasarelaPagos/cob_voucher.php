<?php

namespace App\Models\pasarelaPagos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cob_voucher extends Model
{
    use HasFactory;

    protected $table = "cob_voucher";

    // Relación de uno a muchos inversa.
    public function representante(){
        return $this->belongsTo('App\Models\representante');
    }

    // Relacion de uno a uno.
    public function transaction(){
        return $this->hasOne('App\Models\pasarelaPagos\cob_card_transaction','id');
    }

    //Relacion de voucher a nsc_cobro.
    public function cobro(){

        return $this->hasMany(nsc_cobro::class);
        
    }
}