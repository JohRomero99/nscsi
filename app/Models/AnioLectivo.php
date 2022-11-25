<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnioLectivo extends Model
{
    //use HasFactory;
    protected $table = 'anios_lectivos';
    protected $fillable = [
        'id',
        'anio_lectivo',
        'estado', 
        'created_at'
    ];
    public function libretas()
    {
        return $this->hasMany(Libreta::class);
    }
}
