<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Representante;
use App\Models\cob_card_transaction;
// use App\Modesl\cob_cuota_diferida;

class cob_voucher extends Model
{
    use HasFactory;

    protected $table = "cob_voucher";

    protected $guarded = [];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    // Relación de uno a muchos inversa.
    public function representante(){

        return $this->belongsTo(Representante::class, 'representante_id');

    }

    // Relacion de uno a uno.
    public function card(){

        return $this->hasOne(cob_card_transaction::class,'id');

    }

    //Relacion de voucher a nsc_cobro.
    public function cobro(){

        return $this->hasMany(nsc_cobros::class,'voucher_id');

    }

    // Relacion de voucher a tipo de crédito.
    public function diferido(){

        return $this->belongsTo(cob_cuota_diferida::class,'cuota_id');

    }

}