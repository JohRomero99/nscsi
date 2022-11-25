<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    // use HasFactory;
    protected $table = 'cursos';
    protected $guarded = [];

    public function libretas()
    {
        return $this->hasMany(libreta_cab::class);
    }
}