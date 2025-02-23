<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class estudianteRepresentante extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $table = 'estudiante_representante';

    public function estudiante(){

        return $this->belongsTo(estudiante::class);

    }

    public function representante(){

        return $this->belongsTo(representante::class);

    }
}
