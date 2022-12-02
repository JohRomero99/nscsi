<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personalizarTotal extends Model
{
    use HasFactory;

    protected $table = "cob_personalizar_valor";
    protected $guarded = [];
}
