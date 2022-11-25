<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsrCodigoUsuario extends Model
{
    //use HasFactory;

    protected $table = 'usr_codigo_usuario';
    protected $fillable = [
        'id',
        'representante_ci',
        'rol',
        'email',
        'codigo',
        'nombres',
        'apellidos',
        'estado', 
        'created_at',
        'updated_at'
    ];

}

