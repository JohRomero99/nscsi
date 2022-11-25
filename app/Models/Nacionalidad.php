<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nacionalidad extends Model
{
    use HasFactory;
    protected $table = 'nsc_nacionalidad';
    protected $guarded = [];

    public function persona()
    {
        return $this->hasMany(Persona::class);
    }
}
