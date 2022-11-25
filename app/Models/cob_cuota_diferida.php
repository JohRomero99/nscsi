<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cob_cuota_diferida extends Model
{
    use HasFactory;

    protected $table = "cob_cuota_diferida";

    
    public function num_cuota(){

        return $this->belongsTo(cob_num_cuota::class, 'cob_tipo_diferido_id');

    }

    public function tipo_credito(){

        return $this->belongsTo(cob_tipo_credito::class, 'cob_num_cuota_id');

    }

    //Relación de tipo de crédito a voucher.
    public function voucher(){

        return $this->hasOne(cob_voucher::class, 'cuota_id');

    }
}
