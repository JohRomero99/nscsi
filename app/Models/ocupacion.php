<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ocupacion extends Model
{
    use HasFactory;
    protected $table = 'ocupacion';

    protected $guarded = ['id', 'created_at', 'updated_at'];
}
