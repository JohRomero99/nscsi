<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alergia extends Model
{
    use HasFactory;

    public function fichaSalud(){

        return $this->belongsTo(alergia::class);

    }

}