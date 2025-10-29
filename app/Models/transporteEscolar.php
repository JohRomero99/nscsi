<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transporteEscolar extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $table = 'transporte_escolar';

    public function fichaDatosEstudiante(){

        return $this->hasMany(fichaDatosEstudiante::class);

    }
}
