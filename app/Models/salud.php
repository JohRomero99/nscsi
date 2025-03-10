<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class salud extends Model
{
    use HasFactory;
    protected $table = 'salud';

    protected $guarded = ['id', 'created_at', 'updated_at'];
}

