<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matriculacion extends Model
{
    use HasFactory;
    protected $table = 'matriculacion';

    protected $guarded = ['id', 'created_at', 'updated_at'];
}
