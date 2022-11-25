<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cob_tipo_credito extends Model
{
    use HasFactory;

    protected $table = "cob_tipo_credito";

    public function diferido(){

        return $this->hasOne(cob_cuota_diferida::class);

    }

}
