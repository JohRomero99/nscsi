<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NscOpcionesItems extends Model
{

    protected $table = 'nsc_opciones_items';
    protected $fillable = [
        'id',
        'descripcion',
        'item',
        'formulario',
        'estado',
        'created_at',
        'updated_at'
    ];
}
