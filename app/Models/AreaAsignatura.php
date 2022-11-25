<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AreaAsignatura extends Model
{
    //use HasFactory;
    protected $table = 'areas_asignaturas';
    protected $fillable = [
        'id',
        'nombre',
        'nivel',
        'estado', 
        'created_at'
    ];

    public function asignaturas(){
        return $this->hasMany(AsignaturaLibreta::class);
    }
    
    
}
