<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anioAcademico extends Model
{
    use HasFactory;
    protected $table = 'anio_academico';

    public function estudiante(){

        return $this->hasOne(estudiante::class);

    }
}
