<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pagos extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $table = 'cob_pagos';

    public function cobroDetalle(){

        return $this->hasMany(cobroDetalle::class, 'cob_detalle_id');

    }
}
