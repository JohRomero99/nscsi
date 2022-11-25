<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datosPrueba extends Model
{
    use HasFactory;

    protected $table = "datos_pruebas";

    protected $fillable = [
        'numero',
        'string',
        'caracter',
        'decimal',
        'booleano'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];


}
