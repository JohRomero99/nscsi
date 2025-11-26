<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class informacionLaboral extends Model   
{
    use HasFactory;

    protected $table = 'informacion_laboral';

    protected $guarded = ['id', 'created_at', 'updated_at'];

    
    public function representante(){

        return $this->hasMany(representante::class);

    }
}
