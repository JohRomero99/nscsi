<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AyMInstitucionesEducativas extends Model
{   
    protected $table = 'aym_instituciones_educativas';
    protected $guarded = [];
   
    public function academico(){
        return $this->hasMany(AyMAcademicoAspirante::class);    
    }
}
