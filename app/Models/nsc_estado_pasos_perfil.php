<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nsc_estado_pasos_perfil extends Model
{
    use HasFactory;

    protected $table = "nsc_estado_pasos_perfil";

    public function user(){

        return $this->belongsTo('App\Models\User', 'user_id');

    }

}
