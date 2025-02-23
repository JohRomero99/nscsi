<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fichaSalud extends Model
{
    use HasFactory;

    public function alergias(){

        return $this->hasMany(fichaSalud::class);

    }
}
