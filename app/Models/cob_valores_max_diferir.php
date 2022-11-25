<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cob_valores_max_diferir extends Model
{
    use HasFactory;

    protected $table = "cob_valores_max_diferir";

    public function cuota(){

        return $this->belongsTo(cob_num_cuota::class, 'num_cuota');

    }
    
}
