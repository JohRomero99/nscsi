<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LibretaParcial extends Model
{
   //use HasFactory;
   //protected $connection = "dbinicialnsc";
    protected $table = 'libreta_parcial';
    protected $guarded = [];
    /*
    protected $fillable = [
        'id',
        'libreta_id',
        'asignatura_id',
        'orden',
        'asignatura_nombre',
        'e1_cuant',
        'e1_cual',
        'e2_cuant',
        'e2_cual',
        'e3_cuant',
        'e3_cual',
        'e4_cuant',
        'e4_cual',
        'e5_cuant', 
        'e5_cual',
        'promedio_cuant',
        'promedio_cual',
        'prest',
        'falt_just',
        'falt_injust',
        'atraso',
        'estado',
        'updated_at'
    ];*/

    public function libreta(){
        return $this->belongsTo(Libreta::class ,'libreta_id');
    }
    public function asignatura(){
        return $this->belongsTo(AsignaturaLibreta::class ,'asignatura_id');
    }
}
