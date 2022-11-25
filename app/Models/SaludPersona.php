<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaludPersona extends Model
{
    //use HasFactory;
    protected $table = 'nsc_salud_persona';
    protected $guarded = [];
    public function persona()
    {
        return $this->belongsTo(Persona::class, 'persona_id');
    }
}
