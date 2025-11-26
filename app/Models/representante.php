<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class representante extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $table = 'representante';

    public function persona(){

        return $this->belongsTo(persona::class);

    }

    public function estudianteRepresentante(){

        return $this->hasOne(estudianteRepresentante::class);

    }

    public function informacionLaboral(){

        return $this->belongsTo(informacionLaboral::class);

    }

}
