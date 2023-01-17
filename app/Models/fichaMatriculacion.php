<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fichaMatriculacion extends Model
{
    use HasFactory;

    protected $table = 'nsc_ficha_matriculacion';
    protected $guarded = [];
}
