<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LugarNacimiento extends Model
{
    use HasFactory;
    protected $table = 'nsc_lugar_nacimiento';
    protected $guarded = [];

    public function persona()
    {
        return $this->hasMany(Persona::class);
    }
}
