<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cob_num_cuota extends Model
{
    use HasFactory;

    protected $table = "cob_num_cuota";

    public function diferido(){

        return $this->hasOne(cob_cuota_diferida::class);

    }

    public function valor_max_diferir(){

        return $this->hasOne(cob_valores_max_diferir::class);

    }


}
